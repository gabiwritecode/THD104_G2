
const {
    src,
    dest,
    series,
    parallel,
    watch
} = require('gulp');


// sass

const sass = require('gulp-sass')(require('sass'));


function styleSass() {
    return src('./sass/*.scss')
        .pipe(sass.sync().on('error', sass.logError))
        .pipe(dest('./css'));
}



const fileinclude = require('gulp-file-include');

function includeHTML() {
    return src('src/*.html')
        .pipe(fileinclude({
            prefix: '@@',
            basepath: '@file'
        }))
        .pipe(dest('./'));
}


function watchfiles() {
    watch(['./sass/*.scss', './sass/**/*.scss'], styleSass);
    watch([ 'src/*.html' , 'src/layout/*.html'], series(includeHTML))
}



exports.default = watchfiles