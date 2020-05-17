(function ($, Drupal) {
    Drupal.behaviors.slidercustom = {
        attach: function (context, settings) {
            $(".flexslider_modulo").flexslider({
                animation: "slide",
            });
        },
    };
})(jQuery, Drupal);
