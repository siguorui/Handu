const elixir = require('laravel-elixir');

<<<<<<< HEAD
require('laravel-elixir-vue');
=======
require('laravel-elixir-vue-2');
>>>>>>> origin/master

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

elixir(mix => {
    mix.sass('app.scss')
       .webpack('app.js');
});
