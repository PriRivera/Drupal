/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your application. See https://github.com/JeffreyWay/laravel-mix.
 |
 */
const mix = require("laravel-mix");
const glob = require("glob");

/*
 |--------------------------------------------------------------------------
 | Configuration
 |--------------------------------------------------------------------------
 */
mix.setPublicPath("assets").disableNotifications();

/*
 |--------------------------------------------------------------------------
 | Browsersync
 |--------------------------------------------------------------------------
 */
mix.browserSync({
  proxy: "http://primer-proyecto.ddev.site//",
  files: ["assets/js/**/*.js", "assets/css/**/*.css"],
  stream: true
});

/*
 |--------------------------------------------------------------------------
 | SASS
 |--------------------------------------------------------------------------
 */
mix
  .sass("src/scss/main.scss", "css", {
    sassOptions: {
      outputStyle: "compact"
    }
  })
  .options({
    processCssUrls: false,
    autoprefixer: {
      options: {
        browsers: ["last 20 versions"]
      }
    }
  });

mix.js("src/js/main.js", "js");
