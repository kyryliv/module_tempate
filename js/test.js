(function ($, Drupal) {
    Drupal.behaviors.funds_testBehavior = {
        attach: function () {
            try {
                console.log('Hello funds_test');
            } catch (e) {
                console.log('catch :' + e);
            }
        }
    };
})(jQuery, Drupal);
