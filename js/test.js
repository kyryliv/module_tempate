(function ($, Drupal) {
    Drupal.behaviors.module_templateBehavior = {
        attach: function () {
            try {
                console.log('Hello module_template');
            } catch (e) {
                console.log('catch :' + e);
            }
        }
    };
})(jQuery, Drupal);
