const mix=require('laravel-mix');
mix.js("resourses/js/app.js", 'public/js')
    .sass("resourses/sass/app.scss", 'public/css');