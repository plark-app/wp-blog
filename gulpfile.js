var gulp = require('gulp');
var cssnano = require('gulp-cssnano');
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var merge = require('merge-stream');

gulp.task('sass', function() {
    return gulp.src('app/components/**/*.scss')
    .pipe(sass())
    .pipe(concat('style.css'))
    .pipe(cssnano())
    .pipe(gulp.dest('dist/wp-content/themes/plark_theme'));
});

gulp.task('php', function() {
    return gulp.src('app/**/*.php')
        .pipe(gulp.dest('dist/wp-content/themes/plark_theme/'));
})

gulp.task('js', function () {
    return gulp.src(['app/components/**/*.js', 'app/js/navigation.js', 'app/js/skip-link-focus-fix.js'])
        .pipe(concat('bundle.js'))
        .pipe(uglify())
        .pipe(gulp.dest('dist/wp-content/themes/plark_theme/js'))
})

gulp.task('customizer-js', function() {
    return gulp.src('app/js/customizer.js')
        .pipe(gulp.dest('dist/wp-content/themes/plark_theme/js'));
})

gulp.task('copy', function() {
    return gulp.src(['app/*.txt', 'app/*.png', 'app/*.css', 'app/LICENSE', 'app/phpcs.xml.dist', 'app/*.md', 'app/languages', 'app/layouts'])
        .pipe(gulp.dest('dist/wp-content/themes/plark_theme'))
})

gulp.task('build', gulp.series('copy', 'customizer-js', 'sass', 'js', 'php'))

gulp.task('watch', function() {
    gulp.watch(['app/components/**/*.js', 'app/js/navigation.js', 'app/js/skip-link-focus-fix.js'], gulp.parallel('js'));
    gulp.watch('app/**/*.php', gulp.parallel('php'))
    gulp.watch('app/components/**/*.scss', gulp.parallel('sass'));
})