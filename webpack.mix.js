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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sourceMaps();

// mix.js('resources/js/app.js', 'public/js')
//     .js(['resources/js/eladmin/main.js','fullcalendar-init.js','weather-init.js' ], 'public/eladmin/js/scripts.js')
//     .styles(['resources/css/eladmin/cs-skin-elastic.css','resources/css/eladmin/style.css.css'], 'public/eladmin/css/styles.css')
//     .styles('resources/css/app.css', 'public/css')
//     .extract();
