(function() {
  'use strict';

  // Include Gulp & Tools
  var gulp         = require('gulp'),
      sass         = require('gulp-sass'),
      rtlcss       = require('gulp-rtlcss'),
      autoprefixer = require('gulp-autoprefixer'),
      concat       = require('gulp-concat'),
      rename       = require('gulp-rename'),
      replace      = require('gulp-string-replace'),
      jshint       = require('gulp-jshint'),
      uglify       = require('gulp-uglify'),
      plumber      = require('gulp-plumber'),
      gutil        = require('gulp-util');

  // Set the compiler to use Dart Sass instead of Node Sass
  sass.compiler = require('dart-sass');

  var onError = function(err) {
    console.log('An error occurred:', gutil.colors.magenta(err.message));
    gutil.beep();
    this.emit('end');
  };

  // SASS
  gulp.task('sass', function (done) {
    return gulp.src('./sass/*.scss')
    .pipe(plumber({ errorHandler: onError }))
    .pipe(sass({outputStyle: 'expanded'}))
    .pipe(autoprefixer())
    .pipe(replace('@charset "UTF-8";', ''))
    .pipe(gulp.dest('./'))              // Output LTR stylesheets
    .pipe(rtlcss())                     // Convert to RTL
    .pipe(rename({ suffix: '-rtl' }))   // Rename style.css to 'style-rtl.css'
    .pipe(gulp.dest('./'))             // Output RTL stylesheets
    done();
  });

  // JavaScript
  gulp.task('js', function(done) {
    return gulp.src([
      './node_modules/evil-icons/assets/evil-icons.min.js',
      './bower_components/instafeed.js/instafeed.js',
      './bower_components/jquery.fitvids/jquery.fitvids.js',
      './bower_components/jQuery-viewport-checker/dist/jquery.viewportchecker.min.js',
      './js/scripts/skip-link-focus-fix.js',
      './js/scripts/app.js'])
      .pipe(jshint())
      .pipe(jshint.reporter('jshint-stylish'))
      .pipe(plumber({ errorHandler: onError }))
      .pipe(concat('app.js'))
      .pipe(rename({ suffix: '.min' }))
      .pipe(uglify())
      .pipe(gulp.dest('./js'))
      done();
  });

  // Watch
  gulp.task('watch', function() {
    gulp.watch('sass/**/*.scss', gulp.series('sass'));
    gulp.watch(['./js/scripts/**/*.js'], gulp.series('js'));
  });

  // Build
  gulp.task(
    'build',
    gulp.series('sass', 'js')
  );

  // Default
  gulp.task(
    'default',
    gulp.series('build', 'watch')
  );

})();