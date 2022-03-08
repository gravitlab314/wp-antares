'use_strict';

const gulp       = require('gulp');
const sass       = require('gulp-sass')(require('sass'));
const rename     = require('gulp-rename');
const uglify     = require('gulp-uglify');
const sourcemaps = require('gulp-sourcemaps');

// Default src paths
var scssPath = './src/sass/**/**/*.scss';
var jsPath   = './src/js/**/*.js';

// Default dist paths
var distCss  = './assets/css';
var distJs   = './assets/js';

/*
Init Tasks
*/

function buildStyles(){

    return gulp.src(scssPath)
               .pipe(sourcemaps.init())
               .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
               .pipe(rename({suffix: '.min'}))
               .pipe(sourcemaps.write('./maps'))
               .pipe(gulp.dest(distCss));

}

exports.buildStyles = buildStyles;
