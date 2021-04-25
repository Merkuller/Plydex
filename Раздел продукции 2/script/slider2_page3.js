$(document).ready(function(){
    $('.contentPart1_1MenuSlider_1_page3').slick({
        slidesToShow: 1,
        dots: false,
        swipe: true,
        arrows: false,
        fade: true
    });
    $('.contentPart1_2MenuSlider_2_page3').slick({
        dots: false,
        arrows: true,
        swipe: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        focusOnSelect: true,
        swipeToSlide: true,
        asNavFor:".contentPart1_1MenuSlider_1_page3"
    });
});