$(document).ready(function () {
    const count_car = $('.main-cart').find('.count');
    const wrapper_cart = $('.main-cart');
    const count_wish = $('.wish').find('.count');
    const wrapper_wish = $('.wish');
    const active_wish = $('.wish').find('a');
    if (count_car.is(':empty')){
        count_car.hide();
        wrapper_cart.addClass('empty-card');
    }else {
        count_car.show();
        wrapper_cart.removeClass('empty-card');
    }
    if (count_wish.is(':empty')){
        count_wish.hide();
        wrapper_wish.addClass('empty-wish');
    }else {
        count_wish.show();
        active_wish.show();
        wrapper_wish.removeClass('empty-wish');
    }


});