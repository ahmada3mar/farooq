let mix = require('laravel-mix')

mix
  .setPublicPath('dist')
  .vue()
  .js('resources/js/field.js', 'js')
  .sass('resources/sass/field.scss', 'css')