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

mix.js('resources/assets/js/main.js','public/js/main.js')
    .js('resources/assets/js/delete.js','public/js/delete.js')
    .sass('resources/assets/sass/main.scss', 'public/css/main.css')
    .options({
        processCssUrls: false
       });
    ;
   