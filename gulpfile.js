var gulp = require('gulp');
var sass = require('gulp-sass');
var minifycss = require('gulp-clean-css');
var autoprefixer = require('gulp-autoprefixer');
var size = require('gulp-size');
var rename = require('gulp-rename');
var soften = require('gulp-soften');

// Sass
gulp.task('sass', function(){
  return gulp.src('starCss/sass/screen.scss')
    .pipe(soften(4))
    .pipe(sass())
    .pipe(autoprefixer())
    .pipe(size({title: 'css'}))
    .pipe(gulp.dest('css/'))
    .pipe(rename({suffix: '.min'}))
    .pipe(minifycss())
    .pipe(size({title: 'css.min'}))
    .pipe(gulp.dest('css/'))
});

// Watch
gulp.task('watch', function(){
    gulp.watch('starCss/sass/*.scss', gulp.series('sass')); 
    gulp.watch('starCss/sass/parts/*.scss', gulp.series('sass')); 
});

// Default
gulp.task('default', gulp.series('sass'));