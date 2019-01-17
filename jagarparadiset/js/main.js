jQuery(document).ready(function() {
    jQuery(window).scroll(function() {
        if(jQuery(this).scrollTop() > 500) {
            jQuery('.scroll-up').removeClass('hidden');
        }else {
            jQuery('.scroll-up').addClass('hidden');
        }
    });

    jQuery('.scroll-up').click(function() {
        jQuery('html, body').animate({
            scrollTop: 0
        }, 500);
        return false;
    });

    jQuery('.showDetails').hover(function() {
        jQuery('.hidden').toggle('hidden');
        return false;
    });

    jQuery('.showDetails').mouseleave(function() {
        jQuery('.hidden').addClass('hidden');
        return false;
    });

});
