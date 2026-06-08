{{-- PDF letterhead: logo left, company details right --}}
<header style="width: 100%; display: table; margin-bottom: 4px;">
    <div style="display: table-row;">
        <div style="display: table-cell; vertical-align: middle; width: 58%;">
            @include('partials.pdf_logo_image', ['logoMaxHeight' => 56, 'align' => 'left'])
        </div>
        <div style="display: table-cell; vertical-align: middle; width: 42%;">
            <div style="font-size: 12px; text-align: right; color: #333333; line-height: 1.35;">
                <div style="font-weight: bold; font-size: 12px; color: #0b1422;">Dallas Limo Black Cars</div>
                <div>3008 Ross Ave, Suite 100</div>
                <div>Dallas, TX 75204</div>
                <div><strong>Phone:</strong>&nbsp;+1 214-897-8056</div>
                <div><strong>Email:</strong>&nbsp;info@dallaslimoandblackcars.com</div>
            </div>
        </div>
    </div>
</header>
