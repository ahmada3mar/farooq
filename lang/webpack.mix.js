let mix = require('laravel-mix')

mix.setPublicPath('dist')
.vue()
.version()
    .js('resources/js/field.js', 'js')
   .sass('resources/sass/field.scss', 'css')
    .webpackConfig({
        resolve: {
            symlinks: false
        }
    })
