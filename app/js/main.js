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
});
'use strict';

$(document).ready(function () {
    var $width_window = $(window).width();
    if ($width_window >= 1200) {
        console.log('desctop');
    }
});
'use strict';

$(document).ready(function () {
    var $width_window = $(window).width();
    if ($width_window < 1200) {
        console.log('mobile');
    }
});