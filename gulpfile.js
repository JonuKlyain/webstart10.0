const gulp = require('gulp');
const cleanCSS = require('gulp-clean-css');
const jsmin = require('gulp-jsmin');
const htmlmin = require('gulp-htmlmin');
const fontmin = require('gulp-fontmin');
const tinify = require('gulp-tinify');
const phpMinify = require('@aquafadas/gulp-php-minify');
gulp.task('minify-css', () => {
    return gulp.src('src/css/*.css')
    .pipe(cleanCSS())
    .pipe(gulp.dest('build/css'))
});

gulp.task('move-js', () => {
    return gulp.src('src/js/*.min.js')
    .pipe(gulp.dest('build/js'))
});

gulp.task('minify-js', () => {
    return gulp.src(['src/js/*.js', '!src/js/*.min.js'])
    .pipe(jsmin())
    .pipe(gulp.dest('build/js'))
});

gulp.task('htmlmin', () => {
    return gulp.src('src/*.html')
    .pipe(htmlmin({ collapseWhitespace: true }))
    .pipe(gulp.dest('build/'))
});

gulp.task('movephp', () => {
    return gulp.src('src/*.php')
    .pipe(gulp.dest('build/'))
})

gulp.task('minify-font-css', () => {
    return gulp.src('src/foonts/transfonter.org-20191004-074147/*.css')
    .pipe(cleanCSS())
    .pipe(gulp.dest('build/fonts/css/'))
});

gulp.task('fontsmin', () => {
    return gulp.src('src/foonts/*.eot', 'src/fonts/*.ttf', 'src/fonts/*.woff')
    .pipe(fontmin({ text: '天地玄黄 宇宙洪荒',}))
    .pipe(gulp.dest('build/fonts/'))
});

gulp.task('imagemin', () => {
    return gulp.src('src/img/**/*.*')
    .pipe(tinify('lPpfphSfvXlVfKzMb8tfk98wt8fMlz8J'))
    .pipe(gulp.dest('build/img/'))
});



gulp.task('build', gulp.series('minify-css', 'movephp', 'move-js', 'minify-js', 'htmlmin', 'minify-font-css', 'fontsmin', 'imagemin'));