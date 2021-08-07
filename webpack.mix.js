const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/assets/js')
    .sass('resources/sass/app.scss', 'public/assets/css').options({
        processCssUrls: false
    })
    .sass('resources/sass/home.scss', 'public/assets/css').options({
        processCssUrls: false
    })
    .sass('resources/sass/galery.scss', 'public/assets/css').options({
        processCssUrls: false
    })
    .sass('resources/sass/services.scss', 'public/assets/css').options({
        processCssUrls: false
    });

