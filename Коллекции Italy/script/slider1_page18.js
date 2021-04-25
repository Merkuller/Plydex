$(document).ready(function(){
    $('.slider1_1_page18').slick({
        dots: false,
        arrows: false,
        speed: 400,
        infinite: true,
        slidesToShow: 1,
        fade: true,
        swipe: false
    });
    $('.slider1_2_page18').slick({
        arrows: true,
        speed: 400,
        infinite: true,
        swipe: true,
        slidesToScroll: 1,
        slidesToShow: 4,
        focusOnSelect: true,
        swipeToSlide: true,
        asNavFor: ".slider1_1_page18",
        responsive:[
            {
                breakpoint: 1441,
                settings: {
                    slidesToShow: 3,
                },
                breakpoint: 768,
                settings: {
                    slidesToShow: 4,
                },
                breakpoint: 575,
                settings: {
                    slidesToShow: 3,
                },
                breakpoint: 426,
                settings: {
                    slidesToShow: 3,
                },
                breakpoint: 321,
                settings: {
                    slidesToShow: 2,
                }
            }
        ]
    });
});