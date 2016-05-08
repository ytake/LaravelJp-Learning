var elixir = require('laravel-elixir'),
    gulp = require('gulp');

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

elixir(function (mix) {
  var paths = {
    "bootstrap": elixir.config.assetsPath + '/sass/bootstrap',
    "bootflat": elixir.config.assetsPath + '/sass/bootflat'
  };
  mix
      .copy('node_modules/bootstrap-sass/assets/stylesheets/**/*.*', paths.bootstrap)
      .copy('node_modules/bootflat/bootflat/scss/**/*.*', paths.bootflat)
      .copy('node_modules/bootstrap-sass/assets/javascripts/bootstrap.min.js', elixir.config.publicPath + '/js/bootstrap/')
      .copy('node_modules/bootstrap-sass/assets/fonts/**/*.*', elixir.config.publicPath + '/fonts/')
      .copy('node_modules/jquery/dist/jquery.min.js', elixir.config.publicPath + '/js/jquery/')
      .copy('node_modules/bootflat/bootflat/js/*.min.js', elixir.config.publicPath + '/js/bootflat/')
      .copy('node_modules/bootflat/bootflat/img/**/*.*', elixir.config.publicPath + '/images/bootflat/')
      .copy('node_modules/font-awesome/css/*.min.css', elixir.config.publicPath + '/css/')
      .copy('node_modules/font-awesome/fonts/**/*.*', elixir.config.publicPath + '/fonts/')
      .sass('app.scss', elixir.config.publicPath + '/css/application.css', {
        includePaths: [
          paths.bootstrap,
          paths.bootflat
        ]
      });
});
