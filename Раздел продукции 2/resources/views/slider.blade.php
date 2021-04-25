<div class="slider_page1">
    <div class="carousel_page1"> 
        @forelse ($slider as $slide)
            <div class="slider_item">
                <img src="/public/img/jpg/slider_page1/{{ $slide->src }}" alt="">
            </div>
        @empty
            <div class="slider_item">
                <img src="/public/img/jpg/slider_page1/sliderContent_page1.jpg" alt="">
            </div>
            <div class="slider_item">
                <img src="/public/img/jpg/slider_page1/sliderContent_page1.jpg" alt="">
            </div>
            <div class="slider_item">
                <img src="/public/img/jpg/slider_page1/sliderContent_page1.jpg" alt="">
            </div>
            <div class="slider_item">
                <img src="/public/img/jpg/slider_page1/sliderContent_page1.jpg" alt="">
            </div>
            <div class="slider_item">
                <img src="/public/img/jpg/slider_page1/sliderContent_page1.jpg" alt="">
            </div>
        @endforelse
    </div>
</div>

