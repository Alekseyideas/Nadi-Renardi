'use strict';

$(document).ready(function () {

    var wrapper_wish = $('.wish');
    var wrapper_cart = $('.main-cart');
    var count_car = wrapper_cart.find('.count');
    var count_wish = wrapper_wish.find('.count');
    var active_wish = wrapper_wish.find('a');
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

    var main_slider = $(".slider_desktop");

    main_slider.owlCarousel({
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
        navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
        responsive: {
            0: {
                items: 1,
                dots: true,
                nav: false
            },
            600: {
                items: 2,
                dots: false,
                nav: false
            },
            1000: {
                items: 4,
                dots: false,
                nav: true
            }
        }

    });
    var slider_dots = main_slider.find('.owl-dots');
    var width_slider_dots = slider_dots.width();

    slider_dots.css({
        'margin-left': '-' + width_slider_dots / 2 + 'px'
    });

    function WidthImage() {
        var i = 1;
        var image = void 0;
        while (i < 4) {
            i++;
            image = $('.blocks-' + (i - 1)).find('img');
            image.css({
                'margin-left': '-' + image.width() / 2 + 'px'
            });
            $(window).resize(function () {
                image = $('.blocks-' + (i - 1)).find('img');
                image.css({
                    'margin-left': '-' + image.width() / 2 + 'px'
                });
            });
        }
    }

    WidthImage();

    $('.disable').bind('click', function () {
        $(this).hide();
    });

    $('#form-subscription').validate({
        rules: {
            email: {
                required: true,
                email: true
            }
        },
        messages: {
            email: "Введіть правильну електронну адресу"
        }
    });

    $(function () {
        $('.f-callback').magnificPopup({
            items: {
                src: '#callback-form'
            },
            type: 'inline'

        });
    });

    $("#f-p-callback").validate();
    $('#callback-tel').rules("add", {
        required: true,
        minlength: 19,
        maxlength: 19,
        messages: {
            required: "Поле пустым быть не может",
            minlength: jQuery.validator.format("Номер телефона введен не правильно")
        }
    });

    $('#callback-tel').mask("+38 (000) 99-999-99", { placeholder: "+38 (_ _) _ _-_ _ _-_ _" });
});
'use strict';

$(document).ready(function () {
    var $width_window = $(window).width();
    if ($width_window >= 1200) {
        console.log('desktop');

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