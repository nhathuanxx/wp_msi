"use strict";

// Load plugins
const gulp = require("gulp");
const sass = require("gulp-sass");
const autoprefixer = require("gulp-autoprefixer");
const minifyCSS = require("gulp-clean-css");
const concat = require('gulp-concat');
const minifyJS = require("gulp-uglify");
const plumber = require("gulp-plumber");
const browsersync = require("browser-sync").create();

function clean(cb) {
  // body omitted
  cb();
}

// BrowserSync
function browserSync(done) {
  browsersync.init({
    proxy: "http://localhost/nongduoc/" //UPDATE PROJECT PATH
  });
  done();
}

// BrowserSync Reload
function browserSyncReload(done) {
  browsersync.reload();
  done();
}

// CSS task
// Concat SCSS - Main Style
function mainStyleSCSSCompile() {
  return gulp
    // Create 1 single scss for main theme
    .src(['./dev/scss/main-style/theme.scss']) 
    .pipe( concat("theme.min.scss") )
    //Pre-process the main theme scss
    .pipe(plumber())
    .pipe( sass().on('error', sass.logError) )
    .pipe(autoprefixer())
    .pipe(minifyCSS({compatibility: 'ie8'}))
    .pipe(gulp.dest("./assets/css/"));
}
// Pre-Process SCSS - All other scss
function cssPreprocess() {
  return gulp
    .src("./dev/scss/others/**/*.scss") //UPDATE DEV CSS FOLDER PATH
    .pipe(plumber())
    .pipe( sass().on('error', sass.logError) )
    .pipe(autoprefixer())
    .pipe(minifyCSS({compatibility: 'ie8'}))
    .pipe(gulp.dest("./assets/css/")); //UPDATE PRODUCTION CSS PATH
}

// Transpile, concatenate and minify scripts
function js() {
  return gulp
      .src(["./dev/js/**/*.js"]) //UPDATE DEV JS FOLDER PATH
      .pipe(plumber())
      .pipe( minifyJS({
          ie8:true,
          keep_fnames: true,
          mangle: false
        }) )
      .pipe(gulp.dest("./assets/js/")) //UPDATE PRODUCTION JS FOLDER PATH
      .pipe(browsersync.stream());
}

// Watch files
function watchFiles() {
  gulp.watch("./dev/scss/**/*.scss", css); //UPDATE DEV CSS FOLDER PATH
  gulp.watch("./dev/js/**/*.js", gulp.series(js)) //UPDATE DEV JS FOLDER PATH
  //gulp.watch(["./**/*.php"], gulp.series(browserSyncReload));

  // gulp.watch("./dev/scss/**/*.scss", css); //UPDATE DEV CSS FOLDER PATH
  // gulp.watch("./dev/js/**/*.js", gulp.series(js,browserSyncReload)) //UPDATE DEV JS FOLDER PATH
  // gulp.watch(["./**/*.php"], gulp.series(browserSyncReload));
}

// define complex tasks
const css = gulp.series(mainStyleSCSSCompile, cssPreprocess);
const build = gulp.series(clean, gulp.parallel(css, js));
const watch = gulp.parallel(watchFiles);
const init = gulp.series(build, watch);

// const css = gulp.series(mainStyleSCSSCompile, cssPreprocess, browserSyncReload);
// const build = gulp.series(clean, gulp.parallel(css, js));
// const watch = gulp.parallel(watchFiles, browserSync);
// const init = gulp.series(build, watch);

// export tasks
exports.css = css;
exports.js = js;
exports.clean = clean;
exports.build = build;
exports.watch = watch;
exports.default = init;