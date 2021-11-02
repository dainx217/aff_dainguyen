const mix = require('laravel-mix');

// FRONTEND =====
mix.sass('resources/assets/bacend/scss/frontends.scss', 'public/css');




// FRONTEND =====
mix.js('resources/assets/bacend/js/frontends.js', 'public/js');
mix.js('resources/assets/bacend/js/login.js', 'public/js');



//ADMIN
// mix.js('resources/assets/valex/js/pages/admin_dashboard.js', 'public/js_admin');
// mix.sass('resources/assets/valex/scss/pages/admin_dashboard.scss', 'public/css_admin');


mix.autoload({
    jquery: ['$', 'jQuery', 'window.jQuery'],
});

