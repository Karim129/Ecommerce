@php
    $sliders = [
        ['image' => asset('assets/img/slider1.jpg'), 'caption' => 'Welcome to Our Store'],
        ['image' => asset('assets/img/slider2.jpg'), 'caption' => 'Discover Amazing Products'],
        ['image' => asset('assets/img/slider3.jpg'), 'caption' => 'Shop the Latest Trends'],
    ];
@endphp

<div id="carouselExampleIndicators" class="carousel slide">
    <div class="carousel-indicators">
        @foreach ($sliders as $index => $slider)
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $index }}"
                class="{{ $index === 0 ? 'active' : '' }}" aria-current="{{ $index === 0 ? 'true' : 'false' }}"
                aria-label="Slide {{ $index + 1 }}"></button>
        @endforeach
    </div>
    <div class="carousel-inner" style="height: 600px">
        @foreach ($sliders as $index => $slider)
            <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                <img src="{{ $slider['image'] }}" class="d-block w-100" alt="Slide {{ $index + 1 }}">
                <div class="carousel-caption d-none d-md-block">
                    <h5>{{ $slider['caption'] }}</h5>
                </div>
            </div>
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const carouselElement = document.querySelector('#carouselExampleIndicators');
        if (carouselElement) {
            const carousel = new bootstrap.Carousel(carouselElement, {
                interval: 6000, // 1 minute in milliseconds
                ride: 'carousel'
            });
        }
    });
</script>
