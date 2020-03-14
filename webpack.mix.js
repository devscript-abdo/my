const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js([

    'public/js/jquery-1.12.0.min.js',
    'public/js/bootstrap.min.js',
    'public/js/custom-script.js'
], 'public/js/app.js');


mix.styles([
    'public/css/font-awesome.min.css',
    'public/css/flaticon.css',
    'public/css/bootstrap.css',
    'public/css/abdo.css',
    'public/css/abdo-responsive.css',
], 'public/css/app.css');

mix.autoload({
    jquery: ['$', 'window.jQuery',"jQuery","window.$","jquery","window.jquery"]
});

if (mix.inProduction()) {
    mix.version();
}

