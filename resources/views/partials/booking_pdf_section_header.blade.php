@php
    use App\Support\BookingPdfHeader;
    $variant = $variant ?? 'primary';
    $title = $title ?? '';
@endphp
@if ($variant === 'primary')
    @php $barUri = BookingPdfHeader::primaryBarDataUri($title); @endphp
    @if ($barUri)
        <table cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;">
            <tr>
                <td style="padding: 0; line-height: 0;">
                    <img src="{{ $barUri }}" alt="{{ $title }}" width="100%" style="display: block; width: 100%; height: auto; border: 0;" />
                </td>
            </tr>
        </table>
    @else
        <table cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;">
            <tr>
                <td bgcolor="{{ BookingPdfHeader::GRADIENT_START }}" style="background-color: {{ BookingPdfHeader::GRADIENT_START }}; padding: 8px 12px; font-size: 14px; color: #ffffff; font-weight: 600;">{{ $title }}</td>
            </tr>
        </table>
    @endif
@else
    <table cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;">
        <tr>
            <td bgcolor="{{ BookingPdfHeader::LIGHT_BG }}" style="background-color: {{ BookingPdfHeader::LIGHT_BG }}; padding: 8px 12px; font-size: 14px; color: {{ BookingPdfHeader::LIGHT_TEXT }}; font-weight: 600;">{{ $title }}</td>
        </tr>
    </table>
@endif
