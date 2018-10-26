
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

require('./../../node_modules/materialize-css/dist/js/materialize.min');

$(function () {
    // initialize selects
    $('select').formSelect();

    // initialize fixed action buttons
    $('.profile-action').floatingActionButton({
        direction: 'left',
        hoverEnabled: false
    });

    // initialize tooltips
    $('.tooltipped').tooltip();

    // initialize tabs
    $('.tabs').tabs();

    // initialize chips
    $('.chips').chips();

    // initialize toggles
    $('input.find-types').change(function () {
        var selector = $(this).data('toggle');
        if ($(this).is(":checked")) {
            $("#"+selector).toggleClass('show').toggleClass('hide');
        } else {
            $("#"+selector).toggleClass('hide').toggleClass('show');
        }
    });

    // initialize slider
    var slider = $('#age-range')[0];

    if (slider) {
        noUiSlider.create(slider, {
            start: [20, 70],
            connect: true,
            step: 1,
            orientation: 'horizontal', // 'horizontal' or 'vertical'
            tooltips: true,
            range: {
                'min': 16,
                'max': 100
            },
            format: wNumb({
                decimals: 0
            })
        });
    }
});