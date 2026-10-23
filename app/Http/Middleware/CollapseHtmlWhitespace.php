<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CollapseHtmlWhitespace
{
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        $type = (string) $response->headers->get('Content-Type', '');
        if ($type !== '' && !str_contains($type, 'text/html')) {
            return $response;
        }

        $content = $response->getContent();
        if (!is_string($content) || !str_contains($content, '<html')) {
            return $response;
        }

        $blocks = [];
        $content = preg_replace_callback(
            '#<(pre|textarea|script|style)\b[^>]*>.*?</\1>#is',
            function (array $match) use (&$blocks) {
                $key = '%%HTMLBLOCK' . count($blocks) . '%%';
                $blocks[$key] = $match[0];

                return $key;
            },
            $content
        );

        $content = preg_replace('/>\s+</', '> <', $content ?? '');
        if ($blocks) {
            $content = strtr($content, $blocks);
        }

        $response->setContent($content);

        return $response;
    }
}
