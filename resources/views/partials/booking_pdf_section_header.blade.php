@php
    use App\Support\BookingPdfHeader;
    $variant = $variant ?? 'primary';
    $title = $title ?? '';
@endphp
@php
    $compact = $compact ?? false;
    $pageBreak = $pageBreak ?? false;
    $metaRight = $metaRight ?? null;
    $headerMargin = $compact ? '6px 0 8px' : '0 0 10px';
    $pageBreakClass = $pageBreak ? ' pdf-page-break-before' : '';
    $primaryHeaderClass = trim(($compact ? 'pdf-subsection-header' : 'pdf-section-header') . $pageBreakClass);
    $lightHeaderClass = trim('pdf-subsection-header' . $pageBreakClass);
    $pageBreakStyle = $pageBreak ? ' page-break-before: always; break-before: page;' : '';
@endphp
@if ($variant === 'primary')
    @php $barHeight = $compact ? 36 : ($metaRight ? 56 : 52); $barUri = BookingPdfHeader::primaryBarDataUri($title, 1200, $barHeight, $metaRight); @endphp
    @if ($barUri)
        <table cellpadding="0" cellspacing="0" width="100%" class="{{ $primaryHeaderClass }}" style="border-collapse: collapse; margin: {{ $headerMargin }};{{ $pageBreakStyle }}">
            <tr>
                <td style="padding: 0; line-height: 0;">
                    <img src="{{ $barUri }}" alt="{{ $title }}" width="100%" style="display: block; width: 100%; height: auto; border: 0;" />
                </td>
            </tr>
        </table>
    @else
        <table cellpadding="0" cellspacing="0" width="100%" class="{{ $primaryHeaderClass }}" style="border-collapse: collapse; margin: {{ $headerMargin }};{{ $pageBreakStyle }}">
            <tr>
                <td bgcolor="{{ BookingPdfHeader::GRADIENT_START }}" valign="middle" style="background-color: {{ BookingPdfHeader::GRADIENT_START }}; padding: 10px 12px; font-size: 14px; color: #ffffff; font-weight: 600; line-height: 1.2;">{{ $title }}</td>
                @if ($metaRight)
                <td bgcolor="{{ BookingPdfHeader::GRADIENT_START }}" align="right" valign="middle" style="background-color: {{ BookingPdfHeader::GRADIENT_START }}; padding: 10px 12px; font-size: 12px; color: #ffffff; font-weight: 700; white-space: nowrap; line-height: 1.2;">{{ $metaRight }}</td>
                @endif
            </tr>
        </table>
    @endif
@else
    <table cellpadding="0" cellspacing="0" width="100%" class="{{ $lightHeaderClass }}" style="border-collapse: collapse; margin: 6px 0 8px;{{ $pageBreakStyle }}">
        <tr>
            <td bgcolor="{{ BookingPdfHeader::LIGHT_BG }}" style="background-color: {{ BookingPdfHeader::LIGHT_BG }}; padding: 5px 10px; font-size: 13px; line-height: 1.4; color: {{ BookingPdfHeader::LIGHT_TEXT }}; font-weight: 600; border-bottom: 1px solid #e0e4e8; border-left: 3px solid {{ BookingPdfHeader::GRADIENT_START }};">{{ $title }}</td>
        </tr>
    </table>
@endif
