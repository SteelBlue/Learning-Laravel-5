var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {

    //mix.less('app.less');

     /**
      * Merge All Stylesheets Together
      **/
    //mix.styles([
    //   'vendor/normalize.css',
    //   'app.css'
    //], 'public/output/final.css', 'public/css');

     /**
      * Merge All Scripts Together
      **/
    //mix.scripts([
    //    'vendor/jquery.js',
    //    'main.js',
    //    'coupon.js'
    //], 'public/outputs/scripts.js', 'public/js');

    /**
     * Run Tests
     **/
    //mix.phpUnit().phpSpec();

    /**
     * Versioning of Files
     **/
    mix.sass('app.scss');

    mix.styles([
        'vendor/normalize.css',
        'app.css'
    ], null, 'public/css');

    // Leverage Cache Busting
    mix.version('public/css/all.css');

});
