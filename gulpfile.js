const gulp = require('gulp');
const plumber = require('gulp-plumber');
const sass = require('gulp-sass');
const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');
// const sourcemaps = require('gulp-sourcemaps');
const groupmq = require('gulp-group-css-media-queries');
const bs = require('browser-sync');

/**
 * Compile Sass files
 */
gulp.task('compile:sass', () =>
  gulp
    .src('sass/**/*.scss') // Grab all sass files in sass folder
    .pipe(plumber()) // Prevent termination on error
    .pipe(
      sass({
        indentType: 'tab',
        indentWidth: 1,
        outputStyle: 'expanded' // Expanded so that our CSS is readable
      })
    )
    .on('error', sass.logError)
    .pipe(
      postcss([
        autoprefixer({
          browsers: ['last 2 versions'],
          cascade: false
        })
      ])
    )
    .pipe(groupmq()) // Group media queries!
    .pipe(gulp.dest('./css')) // Output compiled files in the CSS folder
    .pipe(bs.stream())
); // Stream to browserSync

/**
 * Start up browserSync and Watch Sass files for changes
 */
gulp.task('watch:sass', ['compile:sass'], () => {
  bs.init({
    proxy: 'http://localhost:8888/dbs',
    // proxy: {
    //   target: 'http://localhost:8888/mariadecotiis',
    //   middleware: [
    //     function (req, proxyRes, next) {
    //       proxyRes.setHeader('Access-Control-Allow-Origin', 'Origin, X-Requested-With, Content-Type, Accept');
    //       proxyRes.setHeader('connection', 'open');
    //       next();
    //   }]
    // }
  });

  gulp.watch('sass/**/*.scss', ['compile:sass']);
});

/**
 * Default task executed by running `gulp`
 */
gulp.task('default', ['watch:sass']);
