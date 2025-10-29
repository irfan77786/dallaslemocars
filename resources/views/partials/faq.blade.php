<section class="faq-section">
    <h2 class="faq-title">Frequently Asked Questions</h2>
    <div class="faq-container">
        @foreach ($faqs as $faq)
            <div class="faq-item">
                <button class="faq-question">
                    {{ $faq['question'] }} <span class="icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>{{ $faq['answer'] }}</p>
                </div>
            </div>
        @endforeach
    </div>
</section>
