const gulp = require('gulp'),
    sass = require('gulp-sass');

gulp.task('sass', function () {
    return gulp.src('public/sass/**/*.sass')
        .pipe(sass())
        .pipe(gulp.dest('public/css/'))
});

gulp.task('watch', function () {
    gulp.watch('public/sass/**/*.sass', gulp.series('sass'));
});