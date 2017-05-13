$(document).ready(function () {
    let $width_window =   $(window).width();
    if($width_window>=1200){
        console.log('desktop');

    $('.btn_search').mouseover(function () {
       $('.search').find('form').addClass('active');
    });


        $(document).mouseup(function (e) {
            var container = $(".search");
            if (container.has(e.target).length === 0){
                $('.search').find('form').removeClass('active');
            }
        });

    }
});