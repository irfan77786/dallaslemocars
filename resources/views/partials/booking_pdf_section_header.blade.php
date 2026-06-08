@php
    use App\Support\BookingPdfHeader;
    $variant = $variant ?? 'primary';
    $title = $title ?? '';
@endphp
@php
    $compact = $compact ?? false;
    $pageBreak = $pageBreak ?? false;
    $metaRight = $metaRight ?? null;
    $tight = $tight ?? false;
    $barHeight = $compact ? BookingPdfHeader::BAR_HEIGHT_COMPACT : BookingPdfHeader::BAR_HEIGHT;
    $headerMargin = $tight ? '4px 0 3px' : ($compact ? '5px 0 5px' : '4px 0 4px');
    $cellPadding = $compact ? '8px 10px' : '9px 12px';
    $titleFontSize = $compact ? '13px' : '14px';
    $metaFontSize = $compact ? '11px' : '12px';
    $pageBreakClass = $pageBreak ? ' pdf-page-break-before' : '';
    $primaryHeaderClass = trim(($compact ? 'pdf-subsection-header' : 'pdf-section-header') . $pageBreakClass);
    $lightHeaderClass = trim('pdf-subsection-header' . $pageBreakClass);
    $pageBreakStyle = $pageBreak ? ' page-break-before: always; break-before: page;' : '';
    $primaryBgUri = BookingPdfHeader::primaryGradientBarDataUri(400, $barHeight);
    $lightBgUri = BookingPdfHeader::lightGradientBarDataUri(400, $barHeight);
    $primaryBgStyle = $primaryBgUri
        ? "background-color: " . BookingPdfHeader::GRADIENT_START . "; background-image: url('{$primaryBgUri}'); background-repeat: no-repeat; background-size: 100% 100%;"
        : 'background-color: ' . BookingPdfHeader::GRADIENT_START . ';';
    $lightBgStyle = $lightBgUri
        ? "background-color: " . BookingPdfHeader::LIGHT_BG . "; background-image: url('{$lightBgUri}'); background-repeat: no-repeat; background-size: 100% 100%;"
        : 'background-color: ' . BookingPdfHeader::LIGHT_BG . ';';
    $primaryTextStyle = 'padding: ' . $cellPadding . '; font-size: ' . $titleFontSize . '; color: #ffffff; font-weight: 600; line-height: 1.2; vertical-align: middle; ' . $primaryBgStyle;
    $lightTextStyle = 'padding: ' . $cellPadding . '; font-size: ' . $titleFontSize . '; color: ' . BookingPdfHeader::LIGHT_TEXT . '; font-weight: 600; line-height: 1.2; vertical-align: middle; ' . $lightBgStyle;
@endphp
@if ($variant === 'primary')
    <table cellpadding="0" cellspacing="0" width="100%" class="{{ $primaryHeaderClass }}" style="border-collapse: collapse; margin: {{ $headerMargin }};{{ $pageBreakStyle }}">
        <tr>
            <td style="{{ $primaryTextStyle }}">
                @if ($metaRight)
                    <table cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;">
                        <tr>
                            <td style="padding: 0; font-size: {{ $titleFontSize }}; color: #ffffff; font-weight: 600; line-height: 1.2; vertical-align: middle;">{{ $title }}</td>
                            <td align="right" style="padding: 0; font-size: {{ $metaFontSize }}; color: #ffffff; font-weight: 700; line-height: 1.2; white-space: nowrap; vertical-align: middle;">{{ $metaRight }}</td>
                        </tr>
                    </table>
                @else
                    {{ $title }}
                @endif
            </td>
        </tr>
    </table>
@else
    <table cellpadding="0" cellspacing="0" width="100%" class="{{ $lightHeaderClass }}" style="border-collapse: collapse; margin: {{ $headerMargin }};{{ $pageBreakStyle }}">
        <tr>
            <td style="{{ $lightTextStyle }}">{{ $title }}</td>
        </tr>
    </table>
@endif
