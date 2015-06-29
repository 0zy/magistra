var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('app.scss');

    /* add css here
       1. bootstrap css
       2. moby theme css
     */
    mix.styles([
        "vendor/bootstrap/bootstrap.css",
        "vendor/bootstrap/bootstrap-social.css",
        "vendor/bootstrap/animate.css",
        "vendor/bootstrap/nivo-lightbox.css",
        "vendor/bootstrap/nivo_lightbox_themes/default/default.css",
        "vendor/bootstrap/owl.carousel.css",
        "vendor/bootstrap/owl.theme.css",
        "vendor/moby/style.css",
        "vendor/moby/responsiveness.css",
        "vendor/font-awesome-4.2.0/css/font-awesome.css",
        "vendor/bootstrap/calendar.css",
        "app.css"
    ], null, 'public/css');

    /* add js here
       1. boostrap js
       2. jquery
       3. jquery background video
       4. moby js
     */
    mix.scripts([
        "vendor/bootstrap/jquery-1.11.0.js",
        "vendor/bootstrap/bootstrap.js",
        "vendor/bootstrap/owl.carousel.min.js",
        "vendor/bootstrap/nivo-lightbox.min.js",
        "vendor/bootstrap/jquery.easing.min.js",
        "vendor/bootstrap/SmoothScroll.js",
        "vendor/bootstrap/wow.min.js",
        "vendor/bootstrap/matchMedia.js",
        "vendor/bootstrap/jquery.backgroundvideo.min.js",
        "vendor/bootstrap/jquery-ui-datepicker.js",
        "vendor/bootstrap/jqBootstrapValidation.js",
        "vendor/bootstrap/contact.js",
        "vendor/bootstrap/jquery.ajaxchimp.js",
        "vendor/moby/main.js"
    ], null, "public/js");

    /*
        run tests here
     */
    mix.phpUnit().phpSpec();

    /*
       version files
     */
    mix.version(["public/css/all.css","public/js/all.js"]);

});
