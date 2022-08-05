var gulp = require('gulp');
var less = require('gulp-less');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
var cleanCSS = require('gulp-clean-css');


/*
 * Define our tasks using plain functions
 */
function styles() {
    return gulp.src(["*.css", "!common.css", "!inner.css", "!catalog.css", "!bootstrap-select.css", "!bootstrap1.css"])
        .pipe(cleanCSS())
        // pass in options to the stream
        .pipe(rename({
            basename: 'main',
            suffix: '.min'
        }))
        .pipe(concat('main.min.css'))
        .pipe(gulp.dest("."));
}

function scripts() {
    return gulp.src(["*.js", "!jquery_1.11.3_jquery.min.js", "!inputmask.js", "!jquery.inputmask.js", "!bootstrap.js", "!bootstrap-select.js", "!defaults-ru_RU.js",
        "!jquery.fancybox.js", "!main.js", "!jquery.form.js", "!common_func.js", "!validation.js", "!gulpfile.js"], {sourcemaps: true})
        .pipe(uglify())
        .pipe(concat('main.min.js'))
        .pipe(gulp.dest("."));
}

function footerJs() {
    return gulp.src(["inputmask.js", "jquery.inputmask.js", "bootstrap.js", "bootstrap-select.js", "defaults-ru_RU.js",
        "jquery.fancybox.js", "main.js", "jquery.form.js", "common_func.js", "validation.js"])
        .pipe(uglify())
        .pipe(concat('footer.min.js'))
        .pipe(gulp.dest("."));
}

function importantCss() {
    return gulp.src(["common.css", "inner.css", "catalog.css", "bootstrap-select.css", "bootstrap1.css"])
        .pipe(cleanCSS())
        // pass in options to the stream
        .pipe(rename({
            basename: 'important',
            suffix: '.min'
        }))
        .pipe(concat('important.min.css'))
        .pipe(gulp.dest("."));
}

/*
 * Specify if tasks run in series or parallel using `gulp.series` and `gulp.parallel`
 */
var build = gulp.parallel(gulp.parallel(styles, scripts), gulp.parallel(footerJs, importantCss));

/*
 * You can use CommonJS `exports` module notation to declare tasks
 */
exports.styles = styles;
//exports.scripts = scripts;
exports.build = build;
/*
 * Define default task that can be called by just running `gulp` from cli
 */
exports.default = build;
