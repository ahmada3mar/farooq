let mix = require('laravel-mix')

mix
  .setPublicPath('dist')
  .vue(3)
  .js('resources/js/card.js', 'js')
  .sass('resources/sass/card.scss', 'css')
