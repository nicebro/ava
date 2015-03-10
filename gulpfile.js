var gulp = require('gulp'),  
    less = require('gulp-less'),
    minify = require('gulp-minify-css'),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify'),
    rename = require('gulp-rename'),
    fileinclude = require('gulp-file-include'),
    browserSync = require('browser-sync');

gulp.task('browser-sync', function() {
    browserSync({
        server: {
            baseDir: "./public/"
        },
        open: false,
    });
});

var paths = {  
    'src': {
        'less': './src/less/',
        'js': './src/js/'
    },
    'assets': {
        'css': './public/assets/css/',
        'js': './public/assets/js/',
        'fonts': './public/assets/fonts/',
        'vendor': './bower_components/'
    }
};

function catchError(error) { 
    console.log(error.toString());
    this.emit('end'); 
}

gulp.task('css', function() {  
  return gulp.src([
    paths.src.less + 'styles.less',
    paths.assets.vendor + 'normalize.css/normalize.css'
    ])
    .pipe(less()).on('error', catchError)
    .pipe(gulp.dest(paths.assets.css)) 
    //.pipe(minify({keepSpecialComments:0}))
    //.pipe(rename({suffix: '.min'}))
    .pipe(gulp.dest(paths.assets.css))
    .pipe(browserSync.reload({stream:true}));
});

gulp.task('js', function() {  
  return gulp.src([
      paths.assets.vendor + 'jquery/dist/jquery.js',
      paths.assets.vendor + 'sequence/scripts/jquery.sequence.js',
      paths.src.js + 'scripts.js'
    ])
    //.pipe(concat('scripts.js'))
    .pipe(gulp.dest(paths.assets.js))
    .pipe(uglify()).on('error', catchError)
    .pipe(rename({suffix: '.min'}))
    .pipe(gulp.dest(paths.assets.js))
    .pipe(browserSync.reload({stream:true}));
});

gulp.task('html', function() {
  gulp.src(['html/*.html'])
    .pipe(fileinclude({
      prefix: '#',
      basepath: '@file'
    }))
    .pipe(gulp.dest('./public/'));
});

gulp.task('watch', ['browser-sync', 'css', 'js', 'html'], function() {  
  gulp.watch(paths.src.less + '*.less', ['css', browserSync.reload]);
  gulp.watch(paths.src.js + '*.js', ['js', browserSync.reload]);
  gulp.watch('html/*.html', ['html', browserSync.reload]);
});
