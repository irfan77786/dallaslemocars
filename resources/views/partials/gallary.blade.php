<section class="destination-cards-section py-3 {{ $customClass }}">
  <div class="container">
    <div class="row text-center mb-4">
        <div class="col-sm-12 col-xl-12">
            <div class="section-title">
                <h2 class="mt-0">{{ $title }}</h2>
                <span>{{ $subtitle }}</span>
            </div>
        </div>
    </div>
    <div class="row gallary-inner-row">
      @foreach ($items as $key => $item)
      <div class="col-12 col-md-6 col-lg-4 mb-3">
        <div class="custom-card" data-key="{{ $key }}">
          <img
            src="{{ $item['image'] ? asset('assets/img/' . $item['image']) : 'https://placehold.co/600x400' }}"
            class="custom-card-img"
            alt="{{ $item['title_before'] }}">
          <div class="custom-card-overlay">
            <h5 class="custom-card-title">
              {{ $item['title_before'] }}
              <span class="custom-arrow">&gt;</span>
              {{ $item['title_after'] }}
            </h5>
            <p class="custom-card-text">
              {{ $item['distance'] }} &nbsp;|&nbsp; {{ $item['time'] }}
            </p>
            <p id="book-ride-label-{{ $key }}" class="custom-card-text book-ride-label" style="display: none; font-weight: 300;">BOOK YOUR RIDE</p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
