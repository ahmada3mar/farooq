let mix = require('laravel-mix')

mix
.vue(3)
  .setPublicPath('dist')
  .js('resources/js/tool.js', 'js')
  .sass('resources/sass/tool.scss', 'css')
