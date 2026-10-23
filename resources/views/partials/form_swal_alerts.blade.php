{{-- SweetAlert2 for form feedback. Optional: $resetFormSelector (CSS selector) resets form on success. --}}
@php
    $swalSuccess = session('success');
    $swalError = session('error');
    $validationHtml = '';
    if (isset($errors) && $errors->any()) {
        $validationHtml = '<ul style="text-align:left;margin:0.5em 0;padding-left:1.25em;">';
        foreach ($errors->all() as $msg) {
            $validationHtml .= '<li>' . e($msg) . '</li>';
        }
        $validationHtml .= '</ul>';
    }
    $resetFormSelector = $resetFormSelector ?? null;
@endphp
@if ($validationHtml !== '' || $swalSuccess || $swalError)
<script>
(function () {
    function runSwal() {
        @if ($validationHtml !== '')
            Swal.fire({
                title: 'Please check the form',
                html: {!! json_encode($validationHtml) !!},
                icon: 'warning',
                confirmButtonText: 'OK',
                confirmButtonColor: '#12143e',
                width: 'min(100vw - 2rem, 32rem)'
            });
        @elseif ($swalSuccess)
            Swal.fire({
                title: 'Success!',
                text: {!! json_encode($swalSuccess) !!},
                icon: 'success',
                confirmButtonText: 'OK',
                confirmButtonColor: '#12143e'
            }).then(function (result) {
                if (result.isConfirmed) {
                    var sel = @json($resetFormSelector);
                    if (sel) {
                        var form = document.querySelector(sel);
                        if (form && typeof form.reset === 'function') {
                            form.reset();
                        }
                    }
                }
            });
        @elseif ($swalError)
            Swal.fire({
                title: 'Something went wrong',
                text: {!! json_encode($swalError) !!},
                icon: 'error',
                confirmButtonText: 'OK',
                confirmButtonColor: '#d33'
            });
        @endif
    }
    function startSwal() {
        if (typeof Swal !== 'undefined') {
            runSwal();
            return;
        }
        var s = document.createElement('script');
        s.src = 'https://cdn.jsdelivr.net/npm/sweetalert2@11';
        s.onload = runSwal;
        document.body.appendChild(s);
    }
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', startSwal);
    } else {
        startSwal();
    }
})();
</script>
@endif
