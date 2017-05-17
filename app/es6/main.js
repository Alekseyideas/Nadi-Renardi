
$(document).ready(function () {

    function heightDetect(){
        let h_block = $('.cont-room');
        h_block.css ('min-height', $(window).height()-500);
        if ($(window).width()>768){
            h_block.css ('min-height', $(window).height()-500);
        }
    }

    heightDetect();
    $(window).resize(function(){
        heightDetect();
    });
    const wrapper_wish = $('.wish');
    const wrapper_cart = $('.main-cart');
    const count_car = wrapper_cart.find('.count');
    const count_wish = wrapper_wish.find('.count');
    const active_wish = wrapper_wish.find('a');
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

    let main_slider = $(".slider_desktop");

    main_slider.owlCarousel(
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
    //noinspection JSUnresolvedFunction
    $(".wrapper-products").owlCarousel(
        {
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
            navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
            responsive:{
                0:{
                    items:1,
                    dots: true,
                    nav:false,
                },
                600:{
                    items:2,
                    dots: false,
                    nav:false,
                },
                1000:{
                    items:4,
                    dots: false,
                    nav:true,
                }
            }

        }
    );
    let slider_dots = main_slider.find('.owl-dots');
    let width_slider_dots = slider_dots.width();

    slider_dots.css({
        'margin-left': `-${width_slider_dots/2}px`
    });




    function WidthImage() {
        let i=1;
        let image;
        while (i<4){
            i++;
            image = $(`.blocks-${i-1}`).find('img');
            image.css({
                'margin-left': `-${image.width()/2}px`
            });
            $(window).resize(function () {
                image = $(`.blocks-${i-1}`).find('img');
                image.css({
                    'margin-left': `-${image.width()/2}px`
                });
            })
        }
    }

    WidthImage();

    $('.disable').bind('click',function () {
        $(this).hide();
    });

    $('#form-subscription').validate({
        rules:{
            email:{
                required: true,
                email: true
            }
        },
        messages: {
            email: "Введіть правильну електронну адресу"
        }
    });



    $(function () {
        //noinspection JSUnresolvedFunction
        $('.f-callback').magnificPopup({
            items: {
                src: '#callback-form',
            },
            type: 'inline',

        });

    });


    let callBackIn =  $('#callback-tel');

        $("#f-p-callback").validate();


        function phoneNumber(input) {
            //noinspection JSUnresolvedVariable
            input.rules("add",{
                required: true,
                minlength: 19,
                maxlength: 19,
                messages: {
                    required: "Поле порожнім бути не може",
                    minlength: jQuery.validator.format("Номер телефону введений неправильно")
                }
            });
        }

    phoneNumber(callBackIn);

        function phoneMask(input_Id) {
            input_Id.mask("+38 (000) 99-999-99", {placeholder: "+380"});
        }

    phoneMask(callBackIn);


    $('.crumbs').find('li:last-child').bind('click',function (e) {
        e.preventDefault();
    });

    $('.btn-size').bind('click',function (e) {
        e.preventDefault();
        if ($(this).hasClass('down') === true){
            $(this).removeClass('down').addClass('up').find('.fa').removeClass('fa-long-arrow-down').addClass('fa-long-arrow-up');

        }else{
            $(this).removeClass('up').addClass('down').find('.fa').removeClass('fa-long-arrow-up').addClass('fa-long-arrow-down');
        }
    });


    let product_gallary = $('.car-pr-img');

    product_gallary.owlCarousel({
            loop: true,
            navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
            responsive:{
                0:{
                    items:1,
                    dots: true,
                    nav:false,
                },
                600:{
                    items:3,
                    dots: false,
                    nav:false,
                },
                1000:{
                    items:4,
                    dots: false,
                    nav:true,
                }
            }
        });

    product_gallary.magnificPopup({
        delegate: 'a',
        type: 'image',
        tLoading: 'Загрузка изображения #%curr%...',
        mainClass: 'mfp-img-mobile',
        gallery: {
            enabled: true,
            counter: false,
            navigateByImgClick: false,
        },
        image: {
            tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',

        },
        zoom: {
            enabled: true,
            duration: 300, // don't foget to change the duration also in CSS
            opener: function(element) {
                return element.find('img');
            }
        }
    });



  function check_size() {
      $('.in-group').find('label').click(function () {
          $('.in-group').find('label').removeClass('active');
          $(this).addClass('active');
          let size_value = $(this).parent('.in-group').find('input').val();
          console.log(size_value);
      })
  }
  check_size();



  function openPopup(popup_id) {
      /** @namespace $.magnificPopup */
      $.magnificPopup.open({
          mainClass: 'mfp-with-zoom',
          items:{
              removalDelay: 300,
              src: popup_id,
          }
      });
  }

$('#btn-buy').bind('click', function (e) {
    if ($('.in-group').find('input').is(':checked') === false){
        e.preventDefault();
        openPopup('#alert-size');
    }else{
        openPopup('#alert-add_cart');
    }
});

let btn_zise_al = $('.btn-zize-alert');

    btn_zise_al.bind('click',function () {
        $.magnificPopup.close();
       let size_id = $(this).data('btn');
        btn_zise_al.removeClass('active');
       $(this).addClass('active');
       $(`#${size_id}`).parent('.in-group').find('label').click();
    });

    $('.close-popup').bind('click',function () {
        $.magnificPopup.close();
    });

    $('#btn-one_click').bind('click',function () {
        openPopup('#alert-one_click');
    });


    $('#form-one_click').validate();

    const OneClickTel = $('#tel-one_click');

    phoneNumber(OneClickTel);

    phoneMask(OneClickTel);

    $('#btn-add_favorite').bind('click',function () {
        if ($('body').hasClass('unregistered')===true){
            openPopup('#alert-enter');
        }
        else {

        }
    });
    /** @namespace jQuery.validator */
    $('#comment-form').validate({
        rules:{
            email:{
                required: true,
                email: true
            },
            Name:{
                required: true,
                minlength: 2
            },
            message:{
                required: true,
                minlength: 5
            }
        },
        messages: {

            email: "Введіть правильну електронну адресу",
            Name: {
                minlength: jQuery.validator.format("Имя должно быть не меньше {0} букв ")
            },
            message: {
                minlength: jQuery.validator.format("Сообщение должно содержать не меньше {0} букв ")
            }


        }
    });

    jQuery.extend(jQuery.validator.messages, {
        required: "Поле порожнім бути не може",
    });

    let toggle = $('.toggle');
    toggle.bind('click',function () {
        toggle.removeClass('active').find('.fa').removeClass('fa-angle-up').addClass('fa-angle-down');
       $('.in-toggle').slideUp();
       $(this).addClass('active').find('.in-toggle').slideDown();
       $(this).find('.fa').removeClass('fa-angle-down').addClass('fa-angle-up');
    });




    function check_delivery() {
        let btn = $('.wr-label');
        btn.click(function () {
            btn.removeClass('active');
            $(this).addClass('active');
            $('.del-toggle').find('.toggle-content').slideUp();
            $(this).parents('.del-toggle').find('.toggle-content').slideDown();

            let input_value = $(this).parents('.del-toggle').find('input').val();
            console.log(input_value);
        })
    }

    check_delivery();

    function check_payment() {
        let btn = $('.wr-label2');
        btn.click(function () {
            btn.removeClass('active');
            $(this).addClass('active');
            let input_value = $(this).parents('.tog-payment').find('input').val();
            console.log(input_value);
        })
    }

    check_payment();

    $('.enter').bind('click',function () {
        openPopup('#alert-enter');
    });

    function RoomTab() {
        let wraper = $('.nav-room');
        let btn = wraper.find('li');
        let active = wraper.find('.active');
        let openTab = active.data('tab');
        $(`#${openTab}`).show();
        btn.bind('click',function () {
            let tab = $(this).data('tab');

            btn.removeClass('active');
            $(this).addClass('active');
            console.log(tab);
            $('.tab-cont').hide();
            $(`#${tab}`).show();
        });
    }
    RoomTab();


    let person_phone=$('#per-tel');

    phoneMask(person_phone);

    $('#form-person-room').validate();

    phoneNumber(person_phone);

    //noinspection JSUnresolvedFunction
    $('.pl-choose').find('select').chosen({
        width: "90%",
        no_results_text: "Результатiв 0"
    });
    //noinspection JSUnresolvedFunction
    $('.choose-month').find('select').chosen({
        width: "100%",
        no_results_text: "Результатiв 0 "
    });


    $('.link-pr').bind('click',function () {

        let order = $(this).data('order');
        let name = $(this).data('name');
        let img = $(this).data('img');
        let size = $(this).data('size');
        let price = $(this).data('price');
        let status = $(this).data('status');

        let wr_status = $('#pr-status');
        wr_status.removeClass();
        $('#order-number').html(order);
        $('#pr-img').html(`<img src="${img}" title="image">`);
        $('#pr-name').html(name);
        $('#pr-size').html(size);
        $('#pr-price').html(price);
        wr_status.html(status);
        if(status === 'Виконане'){
            wr_status.addClass('ready');
        }else if(status === 'Скасоване'){
            wr_status.addClass('сanceled');
        }else if(status === 'В обробці'){
            wr_status.addClass('in_processing');
        }

        openPopup('#alert-history_order');
    });



    $('.cart').bind('click',function () {
        if(wrapper_cart.hasClass('empty-card') === false ){
            openPopup('#open-cart');
        }
    });
    $('#one_cl').bind('click',function () {
        $.magnificPopup.close();
        setTimeout(function () {
            openPopup('#alert-one_click');
        },500);
    });


    $('#clear').bind('click',function () {
        $('.product-row').slideUp();
        $('.full-cost').hide();
        count_car.hide();
        wrapper_cart.addClass('empty-card');
        setTimeout(function () {
            $.magnificPopup.close();
        },500);
    });

    $('.btn-remove').bind('click',function () {
       $(this).parents('.product-row').slideUp().addClass('close');
        if ($('.product-in-cart').height() < 400){
            $.magnificPopup.close();
            count_car.hide();
            wrapper_cart.addClass('empty-card');
        }




    });

});