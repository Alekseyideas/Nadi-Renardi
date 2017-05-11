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

    $(".slider_desktop").owlCarousel(
        {
            items:1,
            loop: true,
            autoWidth: false,
            slideSpeed : 300,
            paginationSpeed : 400,
            singleItem: true,
            pagination: false,
            rewindSpeed: 500,
            autoplayHoverPause:true,
            autoplay: true,
            smartSpeed: 1000,
            dots: true,

        }
    );
    $(".wrapper-products").owlCarousel(
        {
            items:4,
            loop: true,
            autoWidth: false,
            slideSpeed : 300,
            paginationSpeed : 400,
            singleItem: true,
            pagination: false,
            rewindSpeed: 500,
            autoplayHoverPause:true,
            autoplay: true,
            smartSpeed: 1000,
            dots: true,

        }
    );
    let slider_dots = $('.slider_desktop').find('.owl-dots');
    let width_slider_dots = slider_dots.width();

    slider_dots.css({
        'margin-left': `-${width_slider_dots/2}px`
    });

    console.log($('.slider_desktop').find('.owl-dots').width());

});