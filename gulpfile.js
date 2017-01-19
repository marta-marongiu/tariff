// including plugins
var gulp = require('gulp'),
	less = require("gulp-less"),
	watch = require('gulp-watch');
    imagemin = require('gulp-imagemin');
// task
gulp.task('less', function () {
  return gulp.src('./less/style.less') // path to your file
  .pipe(less())
  .pipe(gulp.dest('./css/'));
});
gulp.task('watch', function() {
    gulp.watch('./less/*.less', ['less']);  // Watch all the .less files, then run the less task
});

gulp.task('images', function() {  
    return gulp.src('img/*')
    .pipe(imagemin())
    .pipe(gulp.dest('prod/'));
});
