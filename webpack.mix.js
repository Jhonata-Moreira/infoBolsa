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

mix.js('node_modules/axios/index.js', 'public/js/axios.js');
mix.js('node_modules/jquery/src/jquery.js', 'public/js');

mix.js('node_modules/chart.js/dist/Chart.js', 'public/js/Chart.js');
    mix.css('node_modules/chart.js/dist/Chart.css', 'public/js/Chart.css');

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');
