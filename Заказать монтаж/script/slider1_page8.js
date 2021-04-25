$(document).ready(function(){
    $('.slider1_page8').slick({
        dots: false,
        arrows: true,
        speed: 200,
        infinite: false,
        autoplay: false,
        swipe: true,
        slidesToShow: 1,
        fade: true,
        prevArrow: $('.slider1LeftBtn_page8'),
        nextArrow: $('.slider1RightBtn_page8')
    });
});