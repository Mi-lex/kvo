const mix = require('laravel-mix');
const path = require('path');

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

mix.webpackConfig({
   module: {
       rules: [
           {
               test: /\.js$/,
               loader: 'babel-loader',
               exclude: path.resolve(__dirname, './node_modules')
           }
       ],
   }
})



mix.js('resources/js/app.js', 'public/js')
   .js('resources/js/pages/form.js', 'public/js')
   .sass('resources/sass/main.scss', 'public/css')
   .sass('resources/sass/noscript.scss', 'public/css')
   .copy('resources/images', 'public/images', false)
   .copy('resources/sass/dropzone.css', 'public/css', false)
   .copy('resources/sass/simplemde.css', 'public/css', false);


// For changing only css
// mix.sass('resources/sass/main.scss', 'public/css');
