// Install
// ---------------------------
// If doesn't has package.json:
// npm init
// ---------------------------
// If has package.json:
// npm install

// Modules
var dirSrc = '';
var dirDist = '';

var gulp        = require('gulp'),
    plugins     = require('gulp-load-plugins')(),
    browserSync = require('browser-sync').create();


// SCSS
gulp.task('scss', function() {
     return gulp.src(dirSrc+'src/scss/main.scss')
        .pipe(plugins.sourcemaps.init())
        .pipe(plugins.sassGlob())
        .pipe(plugins.sass().on('error', plugins.sass.logError))
        .pipe(plugins.autoprefixer({
            cascade: false
        }))
        .pipe(plugins.csso())
        .pipe(plugins.rename({suffix: '.min', prefix : ''}))
        .pipe(plugins.sourcemaps.write('.'))
        .pipe(gulp.dest(dirDist+'assets/css'))
        .pipe(browserSync.stream())
});

// Javascripts
gulp.task('javascripts', function() {
    return gulp.src(dirSrc+'src/js/**/*.js')
        .pipe(plugins.sourcemaps.init())
        .pipe(plugins.babel({
            presets: ['@babel/env']
        }))
        .pipe(plugins.uglify())
        .pipe(plugins.rename({suffix: '.min', prefix : ''}))
        .pipe(plugins.sourcemaps.write('.'))
        .pipe(gulp.dest(dirDist+'assets/js'))
        .pipe(browserSync.stream())
});


// Watching
gulp.task('watch', function() {
    gulp.watch([dirSrc+'src/scss/*.scss'], gulp.series('scss'));
    gulp.watch([dirSrc+'src/js/*.js'], gulp.series('javascripts'));
});

// Default run
gulp.task('default', gulp.series(
        gulp.parallel('scss','javascripts'),
        gulp.parallel('watch')
    ));