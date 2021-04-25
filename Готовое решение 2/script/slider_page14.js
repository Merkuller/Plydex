$(document).ready(function(){
    $('.slides_page14').slick({
        dots: false,
        arrows: true,
        swipe: true,
        infinite: true,
        slidesToShow: 3 ,
        slidesToScroll: 1,
        swipeToSlide: true,
        responsive: [
            {
                breakpoint: 1441,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 1301,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 769,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 580,
                settings: {
                    slidesToShow: 1,
                    variableWidth: true,
                    centerMode: true
                }
            }
        ]
    });
});