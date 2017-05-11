'use strict';

$(document).ready(function () {
    var count_car = $('.main-cart').find('.count');
    var wrapper_cart = $('.main-cart');
    var count_wish = $('.wish').find('.count');
    var wrapper_wish = $('.wish');
    var active_wish = $('.wish').find('a');
    if (count_car.is(':empty')) {
        count_car.hide();
        wrapper_cart.addClass('empty-card');
    } else {
        count_car.show();
        wrapper_cart.removeClass('empty-card');
    }
    if (count_wish.is(':empty')) {
        count_wish.hide();
        wrapper_wish.addClass('empty-wish');
    } else {
        count_wish.show();
        active_wish.show();
        wrapper_wish.removeClass('empty-wish');
    }

    $(".slider_desktop").owlCarousel({
        items: 1,
        loop: true,
        autoWidth: false,
        slideSpeed: 300,
        paginationSpeed: 400,
        singleItem: true,
        pagination: false,
        rewindSpeed: 500,
        autoplayHoverPause: true,
        autoplay: true,
        smartSpeed: 1000,
        dots: true

    });
    $(".wrapper-products").owlCarousel({
        items: 4,
        loop: true,
        autoWidth: false,
        slideSpeed: 300,
        paginationSpeed: 400,
        singleItem: true,
        pagination: false,
        rewindSpeed: 500,
        autoplayHoverPause: true,
        autoplay: true,
        smartSpeed: 1000,
        dots: true

    });
    var slider_dots = $('.slider_desktop').find('.owl-dots');
    var width_slider_dots = slider_dots.width();

    slider_dots.css({
        'margin-left': '-' + width_slider_dots / 2 + 'px'
    });

    console.log($('.slider_desktop').find('.owl-dots').width());
});
'use strict';

$(document).ready(function () {
    var $width_window = $(window).width();
    if ($width_window >= 1200) {
        console.log('desctop');

        $('.btn_search').mouseover(function () {
            $('.search').find('form').addClass('active');
        });

        $(document).mouseup(function (e) {
            var container = $(".search");
            if (container.has(e.target).length === 0) {
                $('.search').find('form').removeClass('active');
            }
        });
    }
});
'use strict';

$(document).ready(function () {
    var $width_window = $(window).width();
    if ($width_window < 1200) {
        console.log('mobile');
    }
});