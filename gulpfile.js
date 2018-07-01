const gulp = require('gulp');
const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
const browserSync = require('browser-sync').create();

gulp.task('sass', function () {
    return gulp.src('src/custom.scss')
        .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
        .pipe(autoprefixer({browsers: ['last 2 versions', 'ie >= 9', 'Android >= 2.3', 'ios >= 7']}))
        .pipe(gulp.dest('css'))
        .pipe(browserSync.reload({
            stream: true
        }));
});

gulp.task('browserSync', function() {
    browserSync.init({
        proxy: 'localnes.com'
    })
});
  
gulp.task('watch', ['browserSync', 'sass'], function () {
    gulp.watch('src/*.scss', ['sass']);
    gulp.watch('js/*.js', browserSync.reload);
    gulp.watch('templates/*.php', browserSync.reload);
    gulp.watch('parts/*.php', browserSync.reload);
    gulp.watch('header-2018.php', browserSync.reload);
});

gulp.task('build', ['sass'], function() {
    console.log('Gettin\' SASSY! Please hold.');
});