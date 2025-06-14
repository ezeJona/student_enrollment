
// Load plugins
const { src, dest, watch, parallel, series } = require("gulp");
const sass = require('gulp-sass')(require('sass'))
const gulpautoprefixer = require('gulp-autoprefixer');
const browsersync = require("browser-sync").create();
const fileinclude = require('gulp-file-include');
const useref = require('gulp-useref');
const cached = require("gulp-cached");
const gulpIf = require("gulp-if");
const del = require('del');
const npmDist = require('gulp-npm-dist');
const postcss = require('gulp-postcss');
const cssnano = require('cssnano');
const autoprefixer = require('autoprefixer');
const replace = require('gulp-replace');
const gulpTerser = require('gulp-terser');
const sourcemaps = require('gulp-sourcemaps');
const uglify = require('gulp-uglify');


// Paths to project folders


const paths = {
  base:{
    base: './',
    node: './node_modules'
    },
  src:{
    basesrc: './src',
    basesrcfiles: './src/**/*',
    scss: './src/assets/scss/**/*.scss',
    css: './src/assets/css',
    js: './src/assets/js/**/*.js',
    vendorJs: './src/assets/js/vendors/*.js',
    vendorjson: './src/assets/json/*.json',
    html: './src/**/*.html',
    images: './src/assets/images/**/*',
    fonts: './src/assets/fonts/**/*',
    assets: './src/assets/**/*',
    partials: '.src/partials/**/*'
    },
  temp:{
    basetemp: './.temp'
    },
  dist:{
    basedist: './dist',
    js: './dist/assets/js',
    vendorJs: './dist/assets/js/vendors',
    vendorjson: './dist/assets/json',
    images: './dist/assets/images',
    css: './dist/assets/css',
    fonts: './dist/assets/fonts',
    libs: './dist/assets/libs'

    }
}


// SCSS to CSS
function scss(callback) {
    return src(paths.src.scss)
        .pipe(sourcemaps.init())
        .pipe(sass().on("error", sass.logError))
        .pipe(gulpautoprefixer())
        .pipe(sourcemaps.write('.'))
        .pipe(dest(paths.src.css))
        .pipe(browsersync.stream());
    callback();
}

// vendor js
function vendorJs(callback) {
  return src(paths.src.vendorJs)
  .pipe(uglify())
  .pipe(dest(paths.dist.vendorJs))
  callback();
}


// Image
function images(callback) {
  return src(paths.src.images)
        .pipe(dest(paths.dist.images))
    callback();
}

// Image
function vendorjson(callback) {
  return src(paths.src.vendorjson)
    .pipe(dest(paths.dist.vendorjson))
    callback();
 
}


// Font task
function fonts(callback) {
    return src(paths.src.fonts)
    .pipe(dest(paths.dist.fonts))
    callback();
}


// HTML
//function html(callback) {
//  return src([paths.src.html, '!./src/partials/**/*'])
//      .pipe(fileinclude({
//        prefix: '@@',
//        basepath: '@file'
//      }))
//        .pipe(replace(/src="(.{0,10})node_modules/g, 'src="$1assets/libs'))
//        .pipe(replace(/href="(.{0,10})node_modules/g, 'href="$1assets/libs'))
//        .pipe(useref())
//        .pipe(cached())
//
//      .pipe(gulpIf('*.css', postcss([ autoprefixer(), cssnano() ]))) // PostCSS plugins with cssnano
//
//        .pipe(gulpIf('*.js', gulpTerser()))
//        .pipe(dest(paths.dist.basedist))
//        .pipe(browsersync.stream());
//    callback();
//}


// File include task for temp
//function fileincludeTask(callback) {
//  return src([paths.src.html, '!./src/partials/**/*'])
//    .pipe(fileinclude({
//      prefix: '@@',
//      basepath: '@file',
//    }))
//    .pipe(cached())
//    .pipe(dest(paths.temp.basetemp));
//    callback();
//}


// Copy libs file from nodemodules to dist
function copyLibs(callback) {
  return src(npmDist(),{base: paths.base.node})
    .pipe(dest(paths.dist.libs));
  callback();
}

// Copy PHP files to dist
function copyPhp(callback) {
  return src('./src/**/*.php')
    .pipe(dest('./dist'));
  callback();
}

// Clean .temp folder
function cleanTemp(callback) {
    del.sync(paths.temp.basetemp);
    callback();
}


// Clean Dist folder
function cleanDist(callback) {
     del.sync(paths.dist.basedist);
     callback();
}


// Browser Sync Serve
/*function browsersyncServe(callback){
  browsersync.init({
    server: {
      baseDir: [paths.temp.basetemp, paths.src.basesrc, paths.base.base]
    }
  });
  callback();
}*/

function browsersyncServe(callback){
  browsersync.init({
    proxy: "http://localhost/student_enrollment/src", // Ajusta a tu ruta local real
    port: 3000,
    open: true,
    notify: false
  });
  callback();
}




// SyncReload
function syncReload(callback){
  browsersync.reload();
  callback();
}


// Watch Task
function watchTask(){
  //watch(paths.src.html, series( fileincludeTask, syncReload));
  watch([paths.src.basesrcfiles, 'src/**/*.php'], syncReload);
  watch([paths.src.images, paths.src.fonts, paths.src.vendorJs, paths.src.vendorjson], series(images, fonts, vendorJs, vendorjson));
  watch([paths.src.scss], series(scss, syncReload));
}


// Default Task Preview
//exports.default = series( fileincludeTask, browsersyncServe, watchTask );
exports.default = series(browsersyncServe, watchTask);



// Build Task for Dist
//exports.build = series(parallel(cleanDist), html, images, fonts, vendorJs, vendorjson, copyLibs, cleanTemp);
//exports.build = series(parallel(cleanDist), images, fonts, vendorJs, vendorjson, copyLibs, cleanTemp);
exports.build = series(
  parallel(cleanDist),
  parallel( images, fonts, vendorJs, vendorjson, copyPhp, copyLibs),
  cleanTemp
);



// export tasks
exports.scss = scss
exports.vendorJs = vendorJs
exports.vendorjson = vendorjson
exports.images = images;
exports.fonts = fonts
//exports.html = html;
//exports.fileincludeTask = fileincludeTask
exports.copyLibs = copyLibs
exports.cleanTemp = cleanTemp
exports.cleanDist = cleanDist