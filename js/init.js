// Foundation
$(document).foundation();

// Slick
$(document).ready(function(){
    // Slideshow de logotipos
    $('.slideshow-logos').slick({
        autoplay: true,
        autoplaySpeed: 5000,
        arrows: true,
        cssEase: 'ease',
        dots: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        centerMode: true,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 640,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
});