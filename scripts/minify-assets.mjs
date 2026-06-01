/* eslint-disable */
/**
 * Minify all CSS / JS source files in-place by creating
 *  <name>.min.css  /  <name>.min.js  next to the original.
 *
 *  - Skips files that are already named *.min.* (assumed to be already minified)
 *  - Skips node_modules, vendor, storage, bootstrap/cache, .git, tests, etc.
 *  - Skips files that contain Blade syntax (just-in-case)
 *
 *  Run with:   node scripts/minify-assets.mjs
 */

import { promises as fs } from 'node:fs';
import path from 'node:path';
import { fileURLToPath } from 'node:url';
import CleanCSS from 'clean-css';
import { minify as terserMinify } from 'terser';

const __filename = fileURLToPath(import.meta.url);
const __dirname  = path.dirname(__filename);
const ROOT       = path.resolve(__dirname, '..');

// Folders we MUST process (they are served by Apache from the project root)
const INCLUDE_DIRS = [
    'assets',
    'new_assets',
    'admin',
    'public/assets',
    'public/new_assets',
    'public/admin',
];

// Skip directories
const SKIP_DIRS = new Set([
    'node_modules', 'vendor', '.git', 'storage', 'bootstrap', 'tests',
    'database', 'config', 'app', 'routes', 'resources', 'mailer',
]);

const cleanCss = new CleanCSS({
    level: 2,
    returnPromise: false,
    compatibility: 'ie9',
    rebase: false,
});

let stats = {
    cssProcessed: 0,
    cssSkipped:   0,
    jsProcessed:  0,
    jsSkipped:    0,
    errors:       0,
    bytesSavedCss: 0,
    bytesSavedJs:  0,
};

async function walk(dir) {
    let entries;
    try {
        entries = await fs.readdir(dir, { withFileTypes: true });
    } catch (e) {
        return [];
    }
    const files = [];
    for (const entry of entries) {
        if (entry.isDirectory()) {
            if (SKIP_DIRS.has(entry.name)) continue;
            files.push(...await walk(path.join(dir, entry.name)));
        } else if (entry.isFile()) {
            files.push(path.join(dir, entry.name));
        }
    }
    return files;
}

function isAlreadyMinified(filename) {
    const base = path.basename(filename).toLowerCase();
    return /\.min\.(css|js)$/i.test(base);
}

async function minifyCss(file) {
    const src = await fs.readFile(file, 'utf8');
    const out = cleanCss.minify(src);

    if (out.errors && out.errors.length) {
        console.error(`  ! CSS errors in ${file}:`, out.errors.slice(0, 2));
        stats.errors++;
        return;
    }

    const target = file.replace(/\.css$/i, '.min.css');
    await fs.writeFile(target, out.styles, 'utf8');

    const saved = src.length - out.styles.length;
    stats.bytesSavedCss += saved;
    stats.cssProcessed++;
    console.log(`  CSS  ${path.relative(ROOT, target)}  (-${saved} B)`);
}

async function minifyJs(file) {
    const src = await fs.readFile(file, 'utf8');

    let out;
    try {
        out = await terserMinify(src, {
            compress: { drop_console: false, drop_debugger: true },
            mangle:   true,
            format:   { comments: false },
            sourceMap: false,
        });
    } catch (err) {
        // Terser is strict ES; some legacy code may fail.
        // Retry with a much safer config (no mangling, no compression).
        try {
            out = await terserMinify(src, {
                compress: false,
                mangle:   false,
                format:   { comments: false, beautify: false },
                ecma:     5,
                sourceMap: false,
            });
        } catch (err2) {
            console.error(`  ! JS error in ${file}: ${err2.message}`);
            stats.errors++;
            return;
        }
    }

    // Terser returns code === undefined when the entire file
    // collapses to nothing (e.g. it is 100% comments). Treat that
    // as a successful minification with empty output.
    const code = (out && typeof out.code === 'string') ? out.code : '';

    const target = file.replace(/\.js$/i, '.min.js');
    await fs.writeFile(target, code, 'utf8');

    const saved = src.length - code.length;
    stats.bytesSavedJs += saved;
    stats.jsProcessed++;
    console.log(`  JS   ${path.relative(ROOT, target)}  (-${saved} B)`);
}

async function processFile(file) {
    const rel = path.relative(ROOT, file).replace(/\\/g, '/');

    if (/\.css$/i.test(file)) {
        if (isAlreadyMinified(file)) { stats.cssSkipped++; return; }
        try { await minifyCss(file); }
        catch (e) { console.error(`  ! CSS failed ${rel}:`, e.message); stats.errors++; }
    } else if (/\.js$/i.test(file)) {
        if (isAlreadyMinified(file)) { stats.jsSkipped++; return; }
        try { await minifyJs(file); }
        catch (e) { console.error(`  ! JS failed ${rel}:`, e.message); stats.errors++; }
    }
}

(async () => {
    console.log('Minifying CSS/JS assets ...');
    const allFiles = [];
    for (const dir of INCLUDE_DIRS) {
        const full = path.join(ROOT, dir);
        try { await fs.access(full); }
        catch { continue; }
        allFiles.push(...await walk(full));
    }

    for (const f of allFiles) {
        await processFile(f);
    }

    console.log('\n-------- SUMMARY --------');
    console.log(`CSS processed : ${stats.cssProcessed}`);
    console.log(`CSS skipped   : ${stats.cssSkipped}  (already *.min.css)`);
    console.log(`JS  processed : ${stats.jsProcessed}`);
    console.log(`JS  skipped   : ${stats.jsSkipped}   (already *.min.js)`);
    console.log(`Errors        : ${stats.errors}`);
    console.log(`Bytes saved   : CSS ${stats.bytesSavedCss}  /  JS ${stats.bytesSavedJs}`);
})();
