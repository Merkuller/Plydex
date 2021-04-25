$(document).ready(function(){
    $('.slider5_1_page19').slick({
        dots: false,
        arrows: false,
        speed: 400,
        infinite: true,
        autoplay: false,
        slidesToScroll: 1,
        slidesToShow: 1,
        fade: true,
        swipe: false
    });
    $('.slider5_2_page19').slick({
        dots: false,
        arrows: true,
        speed: 400,
        infinite: true,
        autoplay: false,
        slidesToScroll: 1,
        slidesToShow: 4,
        swipe: true,
        focusOnSelect: true,
        swipeToSlide: true,
        asNavFor: ".slider5_1_page19"
    });
});