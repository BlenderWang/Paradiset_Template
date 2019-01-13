$(document).ready(function() {
    $(window).scroll(function() {
        if($(this).scrollTop() > 500) {
            $('.scroll-up').removeClass('hidden');
        }else {
            $('.scroll-up').addClass('hidden');
        }
    });

    $('.scroll-up').click(function() {
        $('html, body').animate({
            scrollTop: 0
        }, 500);
        return false;
    });

    $('.showDetails').hover(function() {
        $('.hidden').toggle('hidden');
        return false;
    });

    $('.showDetails').mouseleave(function() {
        $('.hidden').addClass('hidden');
        return false;
    });

});