/**
 * Created by AlekseyIdeas on 26.04.2017.
 */
const   gulp  = require('gulp'),
        sass = require('gulp-sass'),
        browserSync = require('browser-sync'),
        ts = require('gulp-typescript'),
        cssnano = require('gulp-cssnano'),
        concat = require('gulp-concat'),
        uglify = require('gulp-uglifyjs'),
        del = require('del'),
        autoprefixer = require('gulp-autoprefixer'),
        babel = require('gulp-babel'),
        rename = require("gulp-rename");

gulp.task('default', function () {
    return gulp.src('app/sass/*.sass')
        .pipe(sass().on('error', sass.logError))
        .pipe(autoprefixer({
            browsers: ['last 15 versions'],
            cascade: false
        }))
        .pipe(gulp.dest('app/css'))

});

gulp.task('cssnano', function () {
    return gulp.src(['app/css/*.css','!app/css/*.min.css'])
        .pipe(cssnano())
        .pipe(rename({suffix: ".min"}))
        .pipe(gulp.dest('app/css'))
        .pipe(browserSync.reload({stream: true}))
});
gulp.task('scripts', function () {
    return gulp.src([
        'app/libs/jquery/dist/jquery.min.js',
        'app/libs/owl.carousel/dist/owl.carousel.min.js',
        'app/libs/magnific-popup/dist/jquery.magnific-popup.min.js',
    ])
        .pipe(concat('libs.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('app/js'))
});

gulp.task('ts', function () {
    return gulp.src('app/es6/*.js')
        .pipe(babel({
            presets: ['es2015']
        }))
        .pipe(concat('main.js'))
        .pipe(gulp.dest('app/js'));
});

gulp.task('js_mini',function () {
    return gulp.src(['app/js/*.js','!app/js/*.min.js'])
        .pipe(uglify())
        .pipe(rename({suffix: ".min"}))
        .pipe(gulp.dest('app/js'))
        .pipe(browserSync.reload({stream: true}))

});


gulp.task('browesrSynk', function () {
    browserSync.init({
        port: 1000,
        proxy: "dev.NadiRenardi",
        notify: false
    })
});


gulp.task('clean',function () {
    return del.sync('dist');
});

gulp.task('watch', ['browesrSynk', 'cssnano','ts','js_mini'], function () {
    gulp.watch('app/sass/*.sass',['default']);
    gulp.watch(['app/css/*.css','!app/css/*.min.css'],['cssnano']);
    gulp.watch('app/es6/*.js',['ts']);
    gulp.watch(['app/js/*.js','!app/js/*.min.js'],['js_mini']);
    gulp.watch('app/**/*.php').on('change', browserSync.reload);
});

gulp.task('build', ['clean','cssnano','ts','js_mini'], function () {
   let buildCss = gulp.src([
       'app/css/*.min.css',
   ])
       .pipe(gulp.dest('dist/css'));
   let buildFonts = gulp.src('app/fonts/**/*')
       .pipe(gulp.dest('dist/fonts'));
   let buildImg = gulp.src('app/img/**/*')
       .pipe(gulp.dest('dist/img'));
   let buildJs = gulp.src([
        'app/js/*.js'
    ])
        .pipe(gulp.dest('dist/js'));
   let buildTemp = gulp.src('app/*.php')
        .pipe(gulp.dest('dist'))
});