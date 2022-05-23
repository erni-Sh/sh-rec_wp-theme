const gulp = require('gulp'),
      sass = require('gulp-sass'),
      browserSync = require('browser-sync').create(),
      rename = require('gulp-rename'),
      pug = require('gulp-pug'),
      autoprefixer = require('gulp-autoprefixer'),
      sourcemaps = require('gulp-sourcemaps'),
      notify = require('gulp-notify'),
      uglify = require('gulp-uglify'),
      concat = require('gulp-concat'),
      wait = require('gulp-wait'),
      gutil = require('gutil'),
      ftp = require('vinyl-ftp'),
      keys = require('./config_secret.js');


gulp.task('scss', function(){
  return gulp.src([
    'app/scss/styles.scss'
    ])
    .pipe(sourcemaps.init())
    .pipe(wait(1500))
    .pipe(sass({outputStyle: 'compressed', includePaths: ['node_modules']}).on('error', notify.onError({
        message: "Error: <%= error.message %>",
        title: "SASS ERROR"
    })))
    .pipe(autoprefixer({
        overrideBrowserslist: ['last 8 versions']
      }))
    .pipe(rename({suffix: '.min'}))
    .pipe(sourcemaps.write('.', {includeContent: false, sourceRoot: 'static/css'}))
    .pipe(gulp.dest('../e-sh_theme/css'))
});

gulp.task('pug', function(){
  return gulp.src([
    'app/pug/**/*.pug',
    '!app/pug/skeleton/**/*'
    ])
    .pipe(pug({pretty: true}).on('error', notify.onError({
        message: "Error: <%= error.message %>",
        title: "PUG ERROR"
    })))
    .pipe(rename({ extname: '.php' }))
    .pipe(gulp.dest('../e-sh_theme/'))
});

// gulp.task('pug-local', function(){
//   return gulp.src('app/local-dev/*.pug')
//     .pipe(pug({pretty: true}).on('error', notify.onError({
//         message: "Error: <%= error.message %>",
//         title: "PUG ERROR"
//     })))
//     .pipe(gulp.dest('../www/'))
//     .pipe(browserSync.reload({stream: true}))
// });

gulp.task('js', function () {
  return gulp.src([
    // 'app/js/libs/jquery-2.1.1.js',
    'app/js/libs/jquery-3.6.0.min.js',

    // 'app/js/libs/royal_preloader.min.js',

    'app/js/libs/modernizr.custom.js',
    'app/js/libs/retina-1.1.0.min.js',

    'app/js/libs/jquery.easing.js',
    
    'app/js/libs/jquery.fs.tipper.min.js',
    'app/js/libs/trianglify.min.js',
    'app/js/libs/TweenMax.min.js',
    'app/js/libs/ScrollToPlugin.min.js',
    'app/js/libs/cash.min.js',
    'app/js/libs/Card-circle.js',

    'app/js/libs/work-cards.js',

    'app/js/libs/owl.carousel.min.js',
    
    // 'app/js/libs/jquery.fitvids.js',
    
    'app/js/custom-work.js',



    // 'app/js/libs/home-scroll.js',

    // вот эти только для блога
    'app/js/libs/imagesloaded.pkgd.min.js',
    'app/js/libs/isotope.js',

    // 'app/js/libs/jquery.chaffle.min.js',
    // 'app/js/libs/masonry.js',
    // 'app/js/libs/player_showreel.js',
    // 'app/js/libs/velocity.min.js',
    // 'app/js/libs/velocity.ui.min.js',
    
    'app/js/menu.js',
    'app/js/contact.js', 
    'app/js/custom-contact.js',
    'app/js/custom-about.js',
    'app/js/custom-home.js',
    
    'app/js/custom-blog.js',
    'app/js/custom-post.js',

    'app/js/libs/wavesurfer.min.js',
    'app/js/controlswaveform.js',
    'app/js/musicdatabase_start.js',

    'app/js/custom.js'
  ])
    // .pipe(uglify())
    .pipe(concat('custom.js'))
    .pipe(gulp.dest('../e-sh_theme/js'));
});


// gulp.task('browser-sync', function() {
//   browserSync.init({
//       server: {
//           baseDir: "../www/",
//           routes : {
//             '/node_modules' : './node_modules'
//         }
//       }
//   });
// });

gulp.task( 'deploy', function () {
 
    var conn = ftp.create({
        host:     keys.host,
        port:     keys.port,
        user:     keys.user,
        password: keys.password,
        parallel: 10,
        timeOffset: 120, // смещение часового пояса сервера
        log:      gutil.log
    });
 
    var globs = [ // запрет на синхронизацию
        '../e-sh_theme/**',
        '!sftp-config.json',
    ];
    // using base = '.' will transfer everything to /public_html correctly
    return gulp.src( globs, { base: '.', buffer: false } )
        .pipe( conn.newer( '/sheremetrecords.com/wp-content/themes/e-sh_theme/' )) // only upload newer files
        .pipe( conn.dest( '/sheremetrecords.com/wp-content/themes/e-sh_theme/' ) )
        .pipe(notify({
          message: "Да ты крут, чувак)",
          title: "ЗАГРУЖЕНО НА СЕРВЕР!",
          onLast: true
        }));
});

gulp.task('watch', function(){
  gulp.watch('app/scss/**/*.scss', gulp.series('scss','deploy'));
  gulp.watch('app/pug/**/*.pug', gulp.series('pug','deploy'));
  gulp.watch('app/js/**/*.js', gulp.series('js','deploy'));
});

// gulp.task('watch-local', function(done){
//   gulp.watch('app/scss/**/*.scss', gulp.series('scss'));
//   gulp.watch('app/pug/**/*.pug', gulp.series('pug'));
//   gulp.watch('app/js/**/*.js', gulp.series('js'));
//   done();
// });

// -------------------------------------------------
gulp.task('default', gulp.series('scss', 'pug', 'js', 'deploy', 'watch', ));

// gulp.task('default', gulp.series('scss', 'pug-local', 'js', 'watch-local', 'browser-sync'))