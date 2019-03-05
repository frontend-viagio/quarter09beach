var gulp = require('gulp');
var sass = require('gulp-sass');
var minifyCSS = require('gulp-minify-css');
var rename = require('gulp-rename');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var watch = require('gulp-watch');
var replace = require('gulp-replace');
var usemin = require('gulp-usemin');
var image = require('gulp-image');
//var autoprefixer = require('autoprefixer');
var postcss = require('gulp-postcss');
//var browserSync = require('browser-sync').create();
//var reload = browserSync.reload;
var sourcemaps = require('gulp-sourcemaps');
const stripCssComments = require('gulp-strip-css-comments');


// include css before dev
var thirdPartyCSS = [
    // Start : include plugins CSS  //
    './dev/assets/plugins/bootstrap/css/bootstrap.min.css',
    './dev/assets/plugins/bootstrap-off-canvas-nav/css/bootstrap-off-canvas-nav.css',
    './dev/assets/plugins/FlexSlider/flexslider.css',
    './dev/assets/plugins/lightGallery-master/css/lightgallery.css',
    './dev/assets/plugins/animate-css/animate.css',
//    './dev/assets/plugins/pickadate-v2/pickadate-v2.css',
    './dev/assets/plugins/lightslider-master/css/lightslider.min.css',
    './dev/assets/plugins/font-awesome/css/font-awesome.css',
    './dev/assets/plugins/imagehover/css/imagehover.min.css',
    './dev/assets/plugins/linearicons/style.css',
    // End : include plugins CSS //
    './dev/assets/plugins/Magnific-Popup-master/dist/magnific-popup.css',
    './dev/assets/plugins/slick-master/slick/slick.css',
    // Start : include Custom CSS //
    './dev/assets/css/custom.css',
    // End : include Custom CSS //
],
    thirdPartyJS = [
    // Start : include plugins JS  //
    './dev/assets/plugins/jquery/jquery-1.12.0.min.js',
    './dev/assets/plugins/bootstrap/js/bootstrap.min.js',
    '.dev/assets/plugins/modernizr/modernizr.js',
    './dev/assets/plugins/bootstrap-off-canvas-nav/js/bootstrap-off-canvas-nav.js',
    './dev/assets/plugins/FlexSlider/jquery.flexslider.js',
//    './dev/assets/plugins/FlexSlider/demo/js/jquery.easing.js',
//    './dev/assets/plugins/pickadate-v2/pickadate-v2.js',
//    './dev/assets/plugins/FlexSlider/demo/js/jquery.mousewheel.js',
    './dev/assets/plugins/lightGallery-master/js/lightgallery-all.min.js',
    './dev/assets/plugins/lightslider-master/js/lightslider.min.js',
    './dev/assets/plugins/wow-master/dist/wow.min.js',
    './dev/assets/plugins/ScrollToFixed-master/jquery-scrolltofixed.js',
    './dev/assets/plugins/Magnific-Popup-master/dist/jquery.magnific-popup.js',
    './dev/assets/plugins/slick-master/slick/slick.js',
//    './dev/assets/plugins/parallax/parallax.min.js',
//    './dev/assets/plugins/filterizr-master/dist/jquery.filterizr.min.js',
     // End : include plugins JS //
     // Start : include Custom JS //
        './dev/assets/js/custom.js',
     // End : include Custom JS //
];



// Create Task : Convert SCSS TO CSS //

gulp.task('sass', function () {
    return gulp.src('dev/assets/scss/**/*.scss')
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', sass.logError))
        .pipe(sourcemaps.write())
        .pipe(gulp.dest('dev/assets/css'))
});

// Create Task : Autoprefixer CSS //
//gulp.task('autoprefixer', function () {
//    return gulp.src('dev/assets/scss/css/custom.css')
//        .pipe(postcss([autoprefixer()]))
//        .pipe(gulp.dest('dev/assets/css'));
//});

// Create Task : Combine & Minify CSS //
gulp.task('buildCss', function () {
    return gulp.src(thirdPartyCSS) // Combine All CSS 
        .pipe(concat('custom.min.css'))
        .pipe(minifyCSS())
        .pipe(gulp.dest('assets/css'));
});
// Create Task : Combine & Minify Javascript //
gulp.task('buildJs', function () {
    return gulp.src(thirdPartyJS) // Combine All JS 
        .pipe(concat('custom.min.js'))
        .pipe(uglify('compress'))
        .pipe(gulp.dest('assets/js'));
});
// Create Task : Optimize Images //
gulp.task('imgOptimize', function () {
    gulp.src('assets/images/*')
        .pipe(image({
            pngquant: true,
            optipng: false,
            zopflipng: true,
            jpegRecompress: false,
            jpegoptim: true,
            mozjpeg: true,
            gifsicle: true,
            svgo: true,
            concurrent: 12
        }))
        .pipe(gulp.dest('assets/images'));
});



gulp.task('default', ['sass', 'buildCss', 'buildJs'], function () {
    gulp.watch("dev/assets/scss/**/*.scss", ['sass']);
    //    gulp.watch("dev/assets/scss/css/**/*.css", ['autoprefixer']);
    gulp.watch("dev/assets/css/**/*.css", ['buildCss']);
    gulp.watch("dev/assets/js/**/*.js", ['buildJs']);
    
});
gulp.task('build-all', ['sass', 'imgOptimize', 'buildJs', 'buildCss'], function () {});
