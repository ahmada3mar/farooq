let mix = require('laravel-mix')

mix
.vue(3)
  .js('resources/js/tool.js', 'dist/js')
  .sass('resources/sass/tool.scss', 'dist/css')
