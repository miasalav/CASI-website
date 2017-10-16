var gulp = require('gulp'),
uglify = require('gulp-uglify')
rename = require('gulp-rename')
cssUglify = require('gulp-uglifycss')
conCSS = require('gulp-concat')
sass = require('gulp-sass')
autoprefixer = require('gulp-autoprefixer'),
cssnano = require('gulp-cssnano'),

gulp.task("js", function(){
    //targeting files 
    //gulp.src('./**/*.js') // - looks for all js files in the folder and goes into subfolders if available
    gulp.src('./js/*.js')
    //condenses code into one line
    .pipe(uglify())
    .pipe(rename({extname: ".min.js"}))
    .pipe(gulp.dest('./build/js'));
});

gulp.task("css", function(){
    //targeting files 
    //gulp.src('./**/*.js') // - looks for all js files in the folder and goes into subfolders if available
    gulp.src('./css/*.css')
    //condenses code into one line
    .pipe(cssUglify())
    .pipe(rename({extname: ".min.css"}))
    .pipe(gulp.dest('.build/css'));
});

gulp.task("conCSS", function(){
    //targeting files 
    gulp.src('./build/css/*.css')
    //condenses code into one line
    .pipe(conCSS('all.css'))
    .pipe(rename({extname: ".min.css"}))
    .pipe(gulp.dest('./build/css'));

});

gulp.task('sass', function() {
    gulp.src('sass/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(autoprefixer({browsers: ['last 2 versions']
         }))
        .pipe(gulp.dest('./build/css'))
        .pipe(cssUglify())
        .pipe(rename('style.min.css'))
        .pipe(gulp.dest('./build/css'))
        
});

gulp.task("watch", function(){
    gulp.watch('./js/*.js',['js'])
    gulp.watch('./css/*.css',['css'])
    gulp.watch('sass/**/*.scss',['sass'])
});