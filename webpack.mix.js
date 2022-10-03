const mix = require('laravel-mix')

mix.webpackConfig({
   
    stats: {
         children: true
    }
});

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css')
    .js('resources/js/mvp/all.min.js', 'public/js/mvp')
    .js('resources/js/mvp/bootstrap.bundle.min.js', 'public/js/mvp')
    .js('resources/js/mvp/bootstrap.bundle.min.js.map', 'public/js/mvp')
    .js('resources/js/mvp/jquery-2.2.4.min.js', 'public/js/mvp')
    .js('resources/js/mvp/script.js', 'public/js/mvp')
    .js('resources/js/mvp/wow.min.js', 'public/js/mvp')
    .js('resources/js/slick/slick.js', 'public/js/slick')
    .js('resources/js/slick/slick.min.js', 'public/js/slick')
    .postCss('resources/css/auth/style.css', 'public/css/auth')
    .postCss('resources/css/mvp/style.css', 'public/css/mvp')
    .postCss('resources/css/mvp/slick.css', 'public/css/mvp')
    .postCss('resources/css/mvp/main.css', 'public/css/mvp')
    .postCss('resources/css/mvp/animate.css', 'public/css/mvp')
    .postCss('resources/css/login/style.css', 'public/css/mvp')
    .postCss('resources/css/mvp/bootstrap.min.css', 'public/css/mvp')
    .postCss('resources/css/mvp/bootstrap.min.css.map', 'public/css/mvp')
    .postCss('resources/css/mvp/slick-theme.css', 'public/css/mvp')
    .postCss('resources/css/new/style.css', 'public/css/new')
    .postCss('resources/js/slick/slick.css', 'public/css/slick', [
        require('tailwindcss')
    ]);

