let config       = require('./config'),
    gulp         = require('gulp'),
    browserSync  = require('browser-sync').create(),
    autoprefixer = require('autoprefixer'),
    cssnano      = require('cssnano'),
    filter       = require('gulp-filter'),
    browserify   = require('browserify'),
    babelify     = require('babelify'),
    watchify     = require('watchify'),
    imagemin     = require('gulp-imagemin'),
    newer        = require('gulp-newer'),
    rename       = require('gulp-rename'),
    runSequence  = require('run-sequence'),
    sass         = require('gulp-sass'),
    plugins      = require('gulp-load-plugins')({camelize: true}),
    ignore       = require('gulp-ignore'),
    rimraf       = require('gulp-rimraf'),
    zip          = require('gulp-zip'),
    plumber      = require('gulp-plumber'),
    cache        = require('gulp-cache'),
    sourcemaps   = require('gulp-sourcemaps'),
    postcss      = require('gulp-postcss'),
    source       = require('vinyl-source-stream'),
    buffer       = require('vinyl-buffer');

gulp.task('browsersync', function() {
    let files = ['**/*.php'];

    browserSync.init(files, {
        proxy: config.projectDevURL,
        injectChanges: true,
        open: false
    })
})

gulp.task('styles', function() {

    let processors = [
        autoprefixer,
        cssnano
    ]

    return gulp.src('./src/styles/style.scss')
        .pipe(plumber())
        .pipe(sourcemaps.init())
        .pipe(sass({
            errLogToConsole: true
        }))
        .pipe(sourcemaps.write({
            includeContent: false
        }))
        .pipe(sourcemaps.init({loadMaps: true}))
        .pipe(postcss(processors))
        .pipe(sourcemaps.write('.'))
        .pipe(plumber.stop())
        .pipe(browserSync.stream())
        .pipe(gulp.dest('./'))
})

let bundler = watchify(browserify('./src/js/app.js'))
    .transform(babelify, { presets: ['es2015'] });

gulp.task('bundle', function () {
    bundle(bundler);
})

bundler.on('update', bundle);

function bundle() {
    console.log('Recompiling JS...');
    bundler
        .bundle()
        .pipe(source('./src/js/app.js'))
        .pipe(buffer())
        .pipe(rename('bundle.js'))
        .pipe(gulp.dest('./'))
        .on('error', function (err) {
            console.log("An error occured during transpilation. Error - ");
            console.log(err.toString());
        })
}

gulp.task('watch', ['browsersync', 'bundle'], function() {
    gulp.watch('src/styles/**/*.scss', ['styles']);
    gulp.watch('bundle.js', browserSync.reload);
})