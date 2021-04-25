$(document).ready(function(){
    $('.slider1_1_page19').slick({
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
    $('.slider1_2_page19').slick({
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
        asNavFor: ".slider1_1_page19",
        responsive:[
            {
                breakpoint: 1441,
                settings: {
                    slidesToShow: 3,
                },
                breakpoint: 1380,
                settings: {
                    slidesToShow: 4,
                }
            }
        ]
    });
});