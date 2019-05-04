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


mix.styles([
   'resources/css/vendor.css',
], 'public/css/vendor.css')

   .styles([
      'resources/css/theme.css',
   ], 'public/css/theme.css')

   .js('resources/js/ops/add_to_cart.js', 'public/js/ops')
   .js('resources/js/ops/cart_button.js', 'public/js/ops')
   .js('resources/js/ops/submit_cart.js', 'public/js/ops')
   .js('resources/js/ops/wishlist.js', 'public/js/ops')

   .sourceMaps()
   .version();