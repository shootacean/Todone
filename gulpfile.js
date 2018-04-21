const path = require('path');
const fs = require('fs');
const pkg = JSON.parse(fs.readFileSync('./package.json'));
const assetsPath = path.resolve(pkg.path.assetsDir);

const gulp = require('gulp');
const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
const sourcemaps = require('gulp-sourcemaps');
// const cmq = require('gulp-combine-media-queries')
const plumber = require('gulp-plumber');

const gulpWebpack = require('webpack-stream');
const webpack = require('webpack');

const webpackConfig = require('./webpack.config');

gulp.task('sass', () => {
    return gulp.src(path.join(assetsPath, 'sass/main.scss'))
        .pipe(sourcemaps.init())
        .pipe(plumber())
        .pipe(sass({
            includePaths: require('siimple').includePaths
        }))
        .pipe(autoprefixer())
        .pipe(sourcemaps.write())
        .pipe(gulp.dest('public/css/'));
});

// gulp.task('cmq', () => {
//     return gulp.src(path.join(assetsPath, 'css/*.css'))
//         .pipe(cmq({
//             log: false
//         }))
//         .pipe(gulp.dest(path.join(assetsPath, 'css/')));
// });

gulp.task('watch', () => {
    gulp.watch(path.join(assetsPath, 'sass/**/*.scss'), ['sass']);
});

gulp.task('webpack', () => {
    return gulp.src('src/app.js')
        .pipe(gulpWebpack(webpackConfig, webpack))
        .pipe(gulp.dest('public/js'));
});

gulp.task("default", ['sass', 'webpack', 'watch']);