<script>
    // Function to format date as "Mon, Aug 11th, 2025"
    (function() {
        // Format "Sat, Aug 30th, 2025"
        function formatDate(date) {
            if (!date) return '';
            const d = new Date(date);
            if (isNaN(d.getTime())) return '';
            const options = {
                weekday: 'short',
                month: 'short',
                day: 'numeric',
                year: 'numeric'
            };
            const formatted = d.toLocaleDateString('en-US', options);
            const day = d.getDate();
            const suffix = (day % 10 > 3 || Math.floor(day % 100 / 10) === 1) ?
                'th' :
                (['', 'st', 'nd', 'rd'][day % 10] || 'th');
            return formatted.replace(day, day + suffix);
        }

        function initDateOverlays() {
            document.querySelectorAll('.ph-wrap').forEach(function(wrap) {
                const displayInput = wrap.querySelector('.date-display');
                const dateInput = wrap.querySelector('input[type="date"]');
                if (!displayInput || !dateInput) return;

                const sync = () => {
                    if (dateInput.value && String(dateInput.value).trim() !== '') {
                        wrap.classList.add('has-value');
                        displayInput.value = formatDate(dateInput.value);
                    } else {
                        wrap.classList.remove('has-value');
                        displayInput.value = '';
                    }
                };

                // Initial paint
                sync();

                // Keep display in sync
                dateInput.addEventListener('input', sync);
                dateInput.addEventListener('change', sync);
                dateInput.addEventListener('blur', sync);
            });
        }

        document.addEventListener('DOMContentLoaded', initDateOverlays);
    })();
    // Handle date input changes
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.ph-wrap').forEach(function(wrap) {
            const displayInput = wrap.querySelector('.date-display');
            const dateInput = wrap.querySelector('input[type="date"]');
            if (!displayInput || !dateInput) return;

            // Sync placeholder and formatted date
            const sync = () => {
                if (dateInput.value && String(dateInput.value).trim() !== '') {
                    wrap.classList.add('has-value');
                    displayInput.value = formatDate(dateInput.value);
                } else {
                    wrap.classList.remove('has-value');
                    displayInput.value = '';
                }
            };

            // Run on load
            sync();

            // Trigger date picker when clicking text input
            displayInput.addEventListener('click', () => {
                dateInput.showPicker(); // Opens the native date picker
            });

            // Update display input when date changes
            dateInput.addEventListener('input', sync);
            dateInput.addEventListener('change', sync);
            dateInput.addEventListener('blur', sync);
        });
    });
    // Toggle fake placeholder visibility based on value
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.ph-wrap').forEach(function(wrap) {
            const input = wrap.querySelector('input');
            if (!input) return;
            const sync = () => {
                if (input.value && String(input.value).trim() !== '') {
                    wrap.classList.add('has-value');
                } else {
                    wrap.classList.remove('has-value');
                }
            };
            sync();
            input.addEventListener('input', sync);
            input.addEventListener('change', sync);
            input.addEventListener('blur', sync);
        });
    });

    // 2-hour advance booking restriction
    document.addEventListener('DOMContentLoaded', function() {
        function enforceBookingRestrictions(dateId, timeId) {
            const dateInput = document.getElementById(dateId);
            const timeInput = document.getElementById(timeId);
            if (!dateInput || !timeInput) return;

            function updateRestrictions() {
                const now = new Date();
                // Add 2 hours buffer
                now.setHours(now.getHours() + 2);

                const year = now.getFullYear();
                const month = String(now.getMonth() + 1).padStart(2, '0');
                const day = String(now.getDate()).padStart(2, '0');
                const minDateStr = `${year}-${month}-${day}`;

                const hours = String(now.getHours()).padStart(2, '0');
                const minutes = String(now.getMinutes()).padStart(2, '0');
                const minTimeStr = `${hours}:${minutes}`;

                // Set min date
                dateInput.min = minDateStr;

                // If current date value is invalid or empty, set to min date
                if (!dateInput.value || dateInput.value < minDateStr) {
                    dateInput.value = minDateStr;
                }

                // Time restriction logic
                if (dateInput.value === minDateStr) {
                    timeInput.min = minTimeStr;
                    // If current time value is invalid or empty, set to min time
                    if (!timeInput.value || timeInput.value < minTimeStr) {
                         timeInput.value = minTimeStr;
                    }
                } else {
                    timeInput.removeAttribute('min');
                    // If empty, set a default time
                    if (!timeInput.value) {
                        timeInput.value = "12:00";
                    }
                }
            }

            // Run on load
            updateRestrictions();

            // Run on date change
            dateInput.addEventListener('change', updateRestrictions);

            // Optional: Update periodically to handle time passing while page is open
            setInterval(updateRestrictions, 60000);
        }

        enforceBookingRestrictions('pickup-date', 'pickup-time');
        enforceBookingRestrictions('pickup-date-hourly', 'pickup-time-hourly');
    });
</script>
