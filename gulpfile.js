var gulp = require('gulp');
var sass = require('gulp-sass');
var bulkSass = require('gulp-sass-bulk-import');

gulp.task('sass', [], function() {
    gulp.src( 'sass/**/*.scss' )
        .pipe( bulkSass() )
        .pipe( sass().on('error', sass.logError) )
        .pipe( gulp.dest( '_css' ));
});
