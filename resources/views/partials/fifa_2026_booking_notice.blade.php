{{-- FIFA World Cup 2026 event notice (booking payment / Terms modal — matches email styling) --}}
@php
    $fifaNoticeFooter = $fifaNoticeFooter ?? 'Complete FIFA 2026 (Dallas–Fort Worth) event terms are included in your attached booking PDF.';
@endphp
<div class="fifa-event-notice rounded-4 border mb-4 p-3 p-md-4"
     style="background-color: #faf6ef; border-color: #9a7738 !important;"
     role="note"
     aria-label="FIFA World Cup 2026 event notice">
    <div class="d-flex gap-3 align-items-start">
        <div class="flex-shrink-0" aria-hidden="true">
            <div class="rounded-circle d-flex align-items-center justify-content-center shadow-sm"
                 style="width: 36px; height: 36px; border: 2px solid #7a5c1e; background-color: #f5ead4; font-size: 18px; font-weight: 700; color: #5c4515; font-family: Georgia, 'Times New Roman', serif;">
                i
            </div>
        </div>
        <div class="flex-grow-1" style="min-width: 0;">
            <p class="fw-bold mb-2" style="color: #3d2914; font-size: 0.95rem;">
                Important Event Notice – FIFA World Cup 2026 (June 13 – July 15, 2026):
            </p>
            <p class="mb-2 fst-italic" style="font-size: 0.875rem; line-height: 1.55; color: #554433;">
                If this booking falls within the FIFA World Cup 2026 event dates, all rates, fees, and minimums are subject to change without notice based on event demand, availability, and operational conditions. You acknowledge and agree that these rates are not guaranteed until final payment is made in accordance with our policy. By confirming this reservation, you expressly authorize any rate adjustments and agree that such changes are not a basis for refund, credit, cancellation, or chargeback.
            </p>
            <p class="mb-0 small" style="color: #4a4035; line-height: 1.45;">
                {{ $fifaNoticeFooter }}
            </p>
        </div>
    </div>
</div>
