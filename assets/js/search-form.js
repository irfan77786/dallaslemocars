(function () {
    function initRlxSelect(rootId) {
        var root = document.getElementById(rootId);
        if (!root || root.getAttribute('data-rlx-ready') === '1') {
            return;
        }
        root.setAttribute('data-rlx-ready', '1');
        var trigger = root.querySelector('.rlx-trigger');
        var list = root.querySelector('.rlx-list');
        var valueEl = root.querySelector('.rlx-value');
        var hidden = root.querySelector('input[type="hidden"]');
        var options = Array.prototype.slice.call(root.querySelectorAll('.rlx-option'));
        var highlightedIndex = -1;
        options.forEach(function (option, index) {
            if (option.classList.contains('selected')) {
                highlightedIndex = index;
            }
        });

        function open() {
            root.classList.add('open');
            trigger.setAttribute('aria-expanded', 'true');
            list.focus({ preventScroll: true });
            if (highlightedIndex < 0) {
                highlightedIndex = 0;
            }
            highlight(highlightedIndex);
        }

        function close() {
            root.classList.remove('open');
            trigger.setAttribute('aria-expanded', 'false');
        }

        function selectByIndex(i) {
            var opt = options[i];
            if (!opt) {
                return;
            }
            options.forEach(function (option) {
                option.classList.remove('selected');
                option.setAttribute('aria-selected', 'false');
            });
            opt.classList.add('selected');
            opt.setAttribute('aria-selected', 'true');
            highlightedIndex = i;
            hidden.value = opt.getAttribute('data-value');
            valueEl.textContent = opt.textContent.trim();
            close();
            trigger.focus();
        }

        function highlight(i) {
            highlightedIndex = Math.max(0, Math.min(options.length - 1, i));
            options.forEach(function (option, idx) {
                option.tabIndex = idx === highlightedIndex ? 0 : -1;
            });
            if (options[highlightedIndex]) {
                options[highlightedIndex].focus({ preventScroll: true });
            }
        }

        trigger.addEventListener('click', function (e) {
            e.preventDefault();
            if (root.classList.contains('open')) {
                close();
            } else {
                open();
            }
        });
        options.forEach(function (opt, idx) {
            opt.addEventListener('click', function () {
                selectByIndex(idx);
            });
            opt.addEventListener('mousemove', function () {
                highlightedIndex = idx;
            });
        });
        document.addEventListener('click', function (e) {
            if (!root.contains(e.target)) {
                close();
            }
        });
        root.addEventListener('keydown', function (e) {
            if (!root.classList.contains('open')) {
                return;
            }
            if (e.key === 'ArrowDown') {
                e.preventDefault();
                highlight(highlightedIndex + 1);
            } else if (e.key === 'ArrowUp') {
                e.preventDefault();
                highlight(highlightedIndex - 1);
            } else if (e.key === 'Enter') {
                e.preventDefault();
                selectByIndex(highlightedIndex);
            } else if (e.key === 'Escape') {
                e.preventDefault();
                close();
                trigger.focus();
            }
        });
    }

    function enforceBookingRestrictions(dateId, timeId) {
        var dateInput = document.getElementById(dateId);
        var timeInput = document.getElementById(timeId);
        if (!dateInput || !timeInput || dateInput.getAttribute('data-booking-ready') === '1') {
            return;
        }
        dateInput.setAttribute('data-booking-ready', '1');

        function updateRestrictions() {
            var now = new Date();
            now.setHours(now.getHours() + 2);

            var year = now.getFullYear();
            var month = String(now.getMonth() + 1).padStart(2, '0');
            var day = String(now.getDate()).padStart(2, '0');
            var minDateStr = year + '-' + month + '-' + day;
            var hours = String(now.getHours()).padStart(2, '0');
            var minutes = String(now.getMinutes()).padStart(2, '0');
            var minTimeStr = hours + ':' + minutes;

            dateInput.min = minDateStr;
            if (!dateInput.value || dateInput.value < minDateStr) {
                dateInput.value = minDateStr;
            }

            if (dateInput.value === minDateStr) {
                timeInput.min = minTimeStr;
                if (!timeInput.value || timeInput.value < minTimeStr) {
                    timeInput.value = minTimeStr;
                }
            } else {
                timeInput.removeAttribute('min');
                if (!timeInput.value) {
                    timeInput.value = '12:00';
                }
            }
        }

        updateRestrictions();
        dateInput.addEventListener('change', updateRestrictions);
        setInterval(updateRestrictions, 60000);
    }

    function init() {
        document.querySelectorAll('.rlx-select[id^="rlx-hours"]').forEach(function (root) {
            initRlxSelect(root.id);
        });
        document.querySelectorAll('input[type="date"][id*="date"]').forEach(function (dateInput) {
            if (dateInput.id.indexOf('pickup-date') !== 0 && dateInput.id.indexOf('return-date') !== 0) {
                return;
            }
            enforceBookingRestrictions(dateInput.id, dateInput.id.replace('-date', '-time'));
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }
})();
