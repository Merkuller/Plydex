$(document).ready(function(){
    $('.slider4_1_page19').slick({
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
    $('.slider4_2_page19').slick({
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
        asNavFor: ".slider4_1_page19"
    });
});