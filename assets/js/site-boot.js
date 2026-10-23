(function () {
    var cfg = window.__siteBoot || {};
    window.dataLayer = window.dataLayer || [];
    window.gtag = window.gtag || function () {
        window.dataLayer.push(arguments);
    };

    var jqPromise = null;
    var bookingPromise = null;
    var swiperPromise = null;

    function loadScript(src) {
        return new Promise(function (resolve, reject) {
            if (document.querySelector('script[data-src-key="' + src + '"]')) {
                resolve();
                return;
            }
            var s = document.createElement('script');
            s.src = src;
            s.async = true;
            s.setAttribute('data-src-key', src);
            s.onload = function () { resolve(); };
            s.onerror = reject;
            document.body.appendChild(s);
        });
    }

    function loadStylesheet(href) {
        if (document.querySelector('link[href="' + href + '"]')) {
            return;
        }
        var l = document.createElement('link');
        l.rel = 'stylesheet';
        l.href = href;
        document.head.appendChild(l);
    }

    window.loadJqueryOnce = function () {
        if (window.jQuery) {
            return Promise.resolve();
        }
        if (!jqPromise) {
            jqPromise = loadScript(cfg.jqSrc);
        }
        return jqPromise;
    };

    window.loadBookingCustomOnce = function () {
        if (!cfg.needsBooking) {
            return Promise.resolve();
        }
        if (typeof window.initAutocomplete === 'function') {
            return Promise.resolve();
        }
        if (!bookingPromise) {
            bookingPromise = window.loadJqueryOnce().then(function () {
                return loadScript(cfg.bookingSrc);
            });
        }
        return bookingPromise;
    };

    window.loadSwiperBundleOnce = function () {
        if (swiperPromise) {
            return swiperPromise;
        }
        swiperPromise = window.loadJqueryOnce().then(function () {
            loadStylesheet(cfg.swiperCss);
            return loadScript(cfg.swiperJs);
        }).then(function () {
            return loadScript(cfg.customNewJs);
        });
        return swiperPromise;
    };

    function observeSwiper() {
        var targets = document.querySelectorAll('.logo-swiper, .testimonial-slider');
        if (!targets.length) {
            return;
        }
        if (!('IntersectionObserver' in window)) {
            window.loadSwiperBundleOnce();
            return;
        }
        var io = new IntersectionObserver(function (entries) {
            for (var i = 0; i < entries.length; i++) {
                if (entries[i].isIntersecting) {
                    io.disconnect();
                    window.loadSwiperBundleOnce();
                    break;
                }
            }
        }, { rootMargin: '250px 0px' });
        targets.forEach(function (el) { io.observe(el); });
    }

    if (cfg.needsBooking) {
        var mapsLoading = false;
        var dateLibsLoading = false;
        var dateLibsReady = false;

        window.loadGoogleMapsOnce = function () {
            if (mapsLoading || (window.google && window.google.maps && window.google.maps.places)) {
                return;
            }
            mapsLoading = true;
            window.loadBookingCustomOnce().then(function () {
                var s = document.createElement('script');
                s.src = 'https://maps.googleapis.com/maps/api/js?key=' + encodeURIComponent(cfg.mapsKey || '') + '&libraries=places&loading=async&callback=initAutocomplete';
                s.async = true;
                document.head.appendChild(s);
            });
        };

        function initDatePickers() {
            if (!window.jQuery || !jQuery.fn.bootstrapMaterialDatePicker) {
                return;
            }
            jQuery(
                '#pickup-datetime, #pickup-datetime-hourly, #return-datetime-hourly, #pickup-datetime_mobile, #pickup-datetime-hourly_mobile, #return-datetime-hourly_mobile, #pickup-datetime_form, #pickup-datetime-hourly_form, #return-datetime-hourly_form, #pickup-datetime_hero, #pickup-datetime-hourly_hero, #return-datetime-hourly_hero'
            ).bootstrapMaterialDatePicker({
                format: 'ddd, MMM Do, YYYY h:mm A',
                minDate: new Date(),
                lang: 'en',
                weekStart: 0,
                shortTime: true,
                cancelText: 'Back',
                okText: 'OK',
                switchOnClick: true
            });
            dateLibsReady = true;
        }

        window.loadDatePickerLibsOnce = function () {
            if (dateLibsReady || dateLibsLoading) {
                return;
            }
            dateLibsLoading = true;
            window.loadBookingCustomOnce().then(function () {
                loadStylesheet(cfg.dateCss);
                loadStylesheet(cfg.iconsHref);
                loadScript(cfg.momentSrc).then(function () {
                    return loadScript(cfg.pickerSrc);
                }).then(initDatePickers);
            });
        };

        function bindLazyLibs() {
            document.querySelectorAll(
                'input[id^="pickup-location"], input[id^="dropoff-location"], input[name="pickup_location"], input[name="dropoff_location"]'
            ).forEach(function (el) {
                el.addEventListener('focus', window.loadGoogleMapsOnce, { once: true });
                el.addEventListener('touchstart', window.loadGoogleMapsOnce, { once: true, passive: true });
            });
            document.querySelectorAll(
                'input[id*="datetime"], input[id*="pickup-datetime"], input[id*="return-datetime"]'
            ).forEach(function (el) {
                el.addEventListener('focus', window.loadDatePickerLibsOnce, { once: true });
                el.addEventListener('touchstart', window.loadDatePickerLibsOnce, { once: true, passive: true });
            });
            document.querySelectorAll('.search-tab-wrap, .search-form-mobile, .search-form-wrapper-desktop').forEach(function (wrap) {
                wrap.addEventListener('focusin', function () {
                    window.loadBookingCustomOnce();
                }, { once: true });
            });
        }
    }

    function warmHomepageLibs() {
        if (!cfg.isHome || !cfg.needsBooking) {
            return;
        }
        window.loadBookingCustomOnce();
    }

    function lockSubmitButtons() {
        document.querySelectorAll('.contact-us-form, .get-a-quote-form, .news-letter-form').forEach(function (form) {
            form.addEventListener('submit', function () {
                if (form.dataset.submitting === '1') {
                    return;
                }
                form.dataset.submitting = '1';
                form.querySelectorAll('[type="submit"]').forEach(function (button) {
                    if (button.disabled) {
                        return;
                    }
                    button.disabled = true;
                    if (!button.dataset.originalHtml) {
                        button.dataset.originalHtml = button.innerHTML;
                    }
                    button.innerHTML = 'Sending...';
                });
            });
        });
    }

    function boot() {
        if (cfg.needsBooking) {
            bindLazyLibs();
        }
        observeSwiper();
        lockSubmitButtons();
        if (cfg.isHome && cfg.needsBooking) {
            if ('requestIdleCallback' in window) {
                requestIdleCallback(warmHomepageLibs, { timeout: 3500 });
            } else {
                window.addEventListener('load', function () {
                    setTimeout(warmHomepageLibs, 2000);
                });
            }
        }
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', boot);
    } else {
        boot();
    }

    function loadAnalytics() {
        var s = document.createElement('script');
        s.async = true;
        s.src = 'https://www.googletagmanager.com/gtag/js?id=G-QG1V45PRT1';
        s.onload = function () {
            window.gtag('js', new Date());
            window.gtag('config', 'G-QG1V45PRT1');
            window.gtag('config', 'G-D87H3B4PXN');
        };
        document.head.appendChild(s);
    }

    if ('requestIdleCallback' in window) {
        requestIdleCallback(loadAnalytics, { timeout: 6000 });
    } else {
        window.addEventListener('load', function () {
            setTimeout(loadAnalytics, 3000);
        });
    }

    var originalWarn = console.warn;
    console.warn = function (msg) {
        if (typeof msg === 'string' && (msg.indexOf('google.maps.places.PlacesService') !== -1 || msg.indexOf('google.maps.places.AutocompleteService') !== -1 || msg.indexOf('google.maps.Marker') !== -1)) {
            return;
        }
        return originalWarn.apply(console, arguments);
    };
})();
