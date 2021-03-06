const elixir = require('laravel-elixir');

require('laravel-elixir-vue');

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
    mix.sass('app.scss', 'public/assets/css')
        .sass('custom.scss', 'public/assets/css')
        .copy('resources/assets/js/**/*.js', 'public/assets/js')
        .copy('resources/assets/img/**/*.*', 'public/assets/img');
});