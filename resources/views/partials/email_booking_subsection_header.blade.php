@php
    use App\Support\BookingPdfHeader;
    $lightGradient = 'background-color: ' . BookingPdfHeader::LIGHT_BG . '; background-image: linear-gradient(90deg, #fdeef0 0%, #fff3ea 50%, #fdeef0 100%);';
@endphp
<table cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse; margin: 0;">
    <tr>
        <td valign="middle" style="{{ $lightGradient }} padding: 11px 12px; font-size: 14px; line-height: 1.25; color: {{ BookingPdfHeader::LIGHT_TEXT }}; font-weight: 600;">
            {{ $title ?? '' }}
        </td>
    </tr>
</table>
