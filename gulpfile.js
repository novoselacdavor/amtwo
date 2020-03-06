var gulp = require('gulp'),
    sass = require('gulp-sass'),
    uglify = require('gulp-uglify'),
    plumber = require('gulp-plumber'),
    pump = require('pump'),
    concat = require('gulp-concat'),
    imagemin = require('gulp-imagemin'),
    pngquant = require('imagemin-pngquant'),
    autoprefixer = require('gulp-autoprefixer'),
    browserSync = require('browser-sync').create(),
    sourceMap = require('gulp-sourcemaps');

// sass task
gulp.task('sass', function() {
    gulp.src(['resources/sass/*.sass'])
    .pipe(sourceMap.init())
    .pipe(sass.sync().on('error', sass.logError))
    .pipe(autoprefixer({browsers: ['last 30 versions']}))
    .pipe(sass({outputStyle: 'compressed'}))
    //.pipe(sourceMap.write('.'))
    .pipe(gulp.dest('public/assets/css/'))
    .pipe(browserSync.stream());
});

// Scripts Tasks
gulp.task('scripts', function() {
    gulp.src([
        './resources/js/*.js',
    ])
    .pipe(plumber())
    .pipe(concat('main.min.js'))
    .pipe(uglify())
    .pipe(gulp.dest('public/assets/js/'))
    .pipe(browserSync.stream())
    .on('change', browserSync.reload);
});

// Compressing js files
gulp.task('compress', function (cb){
    pump([
            gulp.src('resources/js/*.js'),
            uglify(),
            gulp.dest('public/assets/js')
        ],
        cb
    )
});

// watch task
gulp.task('watch', function() {
    browserSync.init({
        baseDir: "./",
        watch: true,
        proxy: "localhost/amtwo/"
    });
    gulp.watch('resources/sass/**', ['sass']);
    gulp.watch('resources/js/*', ['scripts']);
    gulp.watch('./*.php').on('change', browserSync.reload);
});

gulp.task('default', ['watch']);
