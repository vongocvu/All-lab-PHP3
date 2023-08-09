const mix = require("laravel-mix");
const browserSync = require("browser-sync").create();

mix
  .js("resources/js/app.js", "public/js")
  .sass("resources/sass/app.scss", "public/css")
  .postCss("resources/css/app.css", "public/css/app.css", [
    require("tailwindcss"),
  ])
  .browserSync({
    proxy: "127.0.0.1:8000",
    open: false,
  });
