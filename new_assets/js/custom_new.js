(function () {
    function ready(fn) {
        if (document.readyState === "loading") {
            document.addEventListener("DOMContentLoaded", fn);
        } else {
            fn();
        }
    }

    ready(function () {
        if (typeof Swiper === "undefined") {
            return;
        }

        if (document.querySelector(".logo-swiper")) {
            new Swiper(".logo-swiper", {
                slidesPerView: "auto",
                spaceBetween: 150,
                centeredSlides: true,
                loop: true,
                speed: 6000,
                autoplay: {
                    delay: 0,
                    disableOnInteraction: false,
                },
                allowTouchMove: false,
                simulateTouch: false,
                preventClicks: false,
                preventClicksPropagation: false,
                breakpoints: {
                    320: { spaceBetween: 100 },
                    992: { spaceBetween: 120 },
                    1200: { spaceBetween: 180 },
                },
            });
        }

        if (document.querySelector(".testimonial-slider")) {
            new Swiper(".testimonial-slider", {
                slidesPerView: 1,
                slidesOffsetBefore: 0,
                slidesOffsetAfter: 0,
                spaceBetween: 20,
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
            });
        }

        var input = document.querySelector("#contact_no");
        if (input && typeof window.intlTelInput === "function") {
            window.intlTelInput(input, {
                initialCountry: "us",
                separateDialCode: true,
                preferredCountries: ["us", "gb", "ca", "pk"],
                utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/utils.min.js",
            });
        }
    });
})();
