@php
    $logoUrl = config('branding.mail_logo_url');
    $logoWidth = isset($logoWidth) ? (int) $logoWidth : null;
    $logoMaxHeight = isset($logoMaxHeight) ? (int) $logoMaxHeight : null;
    $align = ($align ?? 'center') === 'left' ? 'left' : 'center';
    $localCandidates = [
        base_path('new_assets/assets/black-car-service-dallas-logo.png'),
        public_path('new_assets/assets/black-car-service-dallas-logo.png'),
        public_path('assets/img/site/black-car-service-dallas-logo.png'),
    ];
    $raw = null;
    foreach ($localCandidates as $path) {
        if (is_string($path) && is_readable($path)) {
            $bytes = @file_get_contents($path);
            if (is_string($bytes) && $bytes !== '') {
                $raw = $bytes;
                break;
            }
        }
    }
    if ($raw === null || $raw === '') {
        $ctx = stream_context_create([
            'http' => ['timeout' => 10, 'follow_location' => 1],
            'ssl' => ['verify_peer' => true, 'verify_peer_name' => true],
        ]);
        $remote = @file_get_contents($logoUrl, false, $ctx);
        if (is_string($remote) && $remote !== '') {
            $raw = $remote;
        }
    }
    $pdfLogoData = (is_string($raw) && $raw !== '') ? base64_encode($raw) : '';
    $pdfLogoMime = 'image/png';

    if ($logoMaxHeight) {
        $imgStyle = 'display: block; max-height: ' . $logoMaxHeight . 'px; height: auto; max-width: 280px; width: auto; border: 0; margin: 0;';
    } elseif ($logoWidth) {
        $imgStyle = 'display: block; max-width: ' . $logoWidth . 'px; width: ' . $logoWidth . 'px; height: auto; border: 0; margin: ' . ($align === 'left' ? '0' : '0 auto') . ';';
    } else {
        $imgStyle = 'display: block; max-height: 60px; height: auto; max-width: 280px; width: auto; border: 0; margin: ' . ($align === 'left' ? '0' : '0 auto') . ';';
    }
@endphp
@if ($pdfLogoData !== '')
    <img src="data:{{ $pdfLogoMime }};base64,{{ $pdfLogoData }}" alt="Dallas Black Limo Cars" style="{{ $imgStyle }}" @if($logoWidth) width="{{ $logoWidth }}" @endif />
@else
    <img src="{{ $logoUrl }}" alt="Dallas Black Limo Cars" style="{{ $imgStyle }}" @if($logoWidth) width="{{ $logoWidth }}" @endif />
@endif
