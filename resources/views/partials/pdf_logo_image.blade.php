@php
    $logoUrl = config('branding.mail_logo_url');
    $localCandidates = [
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
@endphp
@if($pdfLogoData !== '')
    <img src="data:{{ $pdfLogoMime }};base64,{{ $pdfLogoData }}" alt="Dallas Limo and Black Cars" style="height: 60px; max-width: 280px; object-fit: contain;" />
@else
    <div style="font-weight: bold; font-size: 18px;">Dallas Limo And Black Cars Service</div>
@endif
