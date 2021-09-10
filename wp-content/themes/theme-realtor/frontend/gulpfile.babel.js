// Dependencies installation
import gulp from 'gulp';
import { watch } from 'gulp';
import sass from 'gulp-sass';
import autoprefixer from 'gulp-autoprefixer';
import babel from 'gulp-babel';
import concat from 'gulp-concat';
import uglify from 'gulp-uglify';
import minifycss from 'gulp-clean-css';
import browserify from 'gulp-browserify';
import streamify from 'gulp-streamify';

const compileStyles = (done) => {
    gulp.src('./dev/scss/*.scss')
    .pipe(sass())
    .pipe(autoprefixer({
        versions:['last 2 browsers']
    }))
    .pipe(concat('style.css'))
    .pipe(minifycss())
    .pipe(gulp.dest('../'))
    done();
}

const compileScripts = (done) => {
    gulp.src('./dev/es6/*.js')
    .pipe(browserify({
        transform: ['babelify']
    }))
    .pipe(babel())
    .pipe(streamify(uglify())) 
    .pipe(concat('main.js'))
    .pipe(gulp.dest('../js'))
    done();
}

const watchAssets = () => {
    watch('./dev/scss/**/*.scss', {ignoreInitial: false}, compileStyles);
    watch('./dev/es6/**/*.js', {ignoreInitial: false}, compileScripts);
}

export { compileStyles, compileScripts, watchAssets }
export default watchAssets;