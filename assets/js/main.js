window.onload = function () {
    // script



    // $('#cctv-btn').click(function () {
    //     $('span').removeClass('fa fa-stop');
    //     $('span').addClass('fa fa-play')
    // });
    // $('.ch #cctv-btn').click(function () {
    //     $('span').rem oveClass('fa fa-play');
    //     $('span').addClass('fa fa-stop')
    // });


};

AOS.init({
    duration: 2000,
    once: true,
    offset: 0,
});


$(document).ready(function () {



    $('.select-control').select2({
        minimumResultsForSearch: -1
    });

    $('.banner-slide').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        arrows: false,
        autoplay: false,
        autoplaySpeed: 1300,
        speed: 1300,
        focusOnSelect: true,
        adaptiveHeight: true
    });

    $('.ch-slider').slick({
        prevArrow: '<div class="prev-arrow"><span class="chevron-up"><img src="assets/img/icon/chevron-up.svg" alt=""></span></div>',
        nextArrow: '<div class="next-arrow"><span class="chevron-down"><img src="assets/img/icon/chevron-down.svg" alt=""></span></div>',
        arrows: true,
        infinite: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 3000,
        focusOnSelect: true,
        adaptiveHeight: true,
        vertical: true,
        verticalSwiping: true,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    prevArrow: '<div class="prev-arrow"><span class="chevron-left"><img src="assets/img/icon/chevron-left.svg" alt=""></span></div>',
                    nextArrow: '<div class="next-arrow"><span class="chevron-right"><img src="assets/img/icon/chevron-right.svg" alt=""></span></div>',
                    vertical: false,
                    slidesToShow: 4,
                    verticalSwiping: false,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    vertical: false,
                    slidesToShow: 3,
                    verticalSwiping: false,
                    arrows: false,
                    dots: true,
                }
            },
            {
                breakpoint: 576,
                settings: {
                    vertical: false,
                    slidesToShow: 2,
                    verticalSwiping: false,
                    arrows: false,
                    dots: true,
                }
            }
        ]
    });

    $('.cctv-slide').slick({
        infinite: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: true,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 3000,
        focusOnSelect: true,
        adaptiveHeight: true,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                },
            },
            // {
            //     breakpoint: 576,
            //     settings: {
            //         slidesToShow: 1,
            //         slidesToScroll: 1,
            //     },
            // },
        ]
    });

    $('.kl-slide').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        dots: true,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 3000,
        focusOnSelect: true,
        adaptiveHeight: true,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                },
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                },
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                },
            },
        ]
    });

    $('.attach-slider').slick({
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 1,
        dots: true,
        arrows: false,
        autoplay: false,
        autoplaySpeed: 3000,
        focusOnSelect: true,
        adaptiveHeight: true,
        responsive: [
            {
                breakpoint: 769,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                },
            },
        ]
    });

    $('.gallery-slider').slick({
        infinite: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        dots: true,
        arrows: false,
        autoplay: false,
        autoplaySpeed: 3000,
        focusOnSelect: true,
        adaptiveHeight: true,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                },
            },
            {
                breakpoint: 769,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                },
            },
        ]
    });

    $('.news-slide').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: true,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 3000,
        focusOnSelect: true,
        adaptiveHeight: true,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                },
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                },
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                },
            },
        ]
    });

    const tween = KUTE.fromTo(
        '#wave1',
        { path: '#wave1' },
        { path: '#wave2' },
        { repeat: 999, duration: 3000, yoyo: true }
    )
    tween.start();


    // Fancybox.bind('[data-fancybox="cctv"]', {
    //     Thumbs: {
    //         Carousel: {
    //             fill: false,
    //             center: true,
    //         },
    //     },
    // });

    // Fancybox.bind('[data-fancybox="gallery"]', {
    //     Thumbs: {
    //         Carousel: {
    //             fill: false,
    //             center: true,
    //         },
    //     },
    // });

    $("[data-fancybox='cctv']").fancybox({
        thumbs: true,
        slideShow: true,
        fullScreen: true
    });
})

// $(function () {
//     AOS.init({
//         duration: 2000,
//         once: true,
//         offset: 0,
//     });
// });





$(function () {
    ("use strict");
    // script
});
