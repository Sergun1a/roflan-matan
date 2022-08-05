/*import gulp from 'gulp';
import less from 'less';
import concat from "gulp-concat";
import uglify from "gulp-uglify";
import rename from "gulp-rename";
import cleanCss from "gulp-clean-css";
import del from "del";*/


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
    return gulp.src("*.css")
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
    return gulp.src(["*.js","!jquery_1.11.3_jquery.min.js"], {sourcemaps: true})
        .pipe(uglify())
        .pipe(concat('main.min.js'))
        .pipe(gulp.dest("."));
}

/*
 * Specify if tasks run in series or parallel using `gulp.series` and `gulp.parallel`
 */
var build = gulp.parallel(styles, scripts);

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
