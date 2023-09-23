const mix = require('laravel-mix');

mix.setPublicPath('public')
    .webpackConfig({
        devServer: {
            proxy: {
                host: '192.168.1.94',
                port: 8000,
            },
            public: '192.168.1.94:8000',
        },
    })
    .js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');
