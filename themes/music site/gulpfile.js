/**
 * Project Setup
 *
 * Setting up variables for project name and directories
*/

// Project configuration
var project 		= 'music-site', // Project name, used for build zip.
	url 					= 'music-site.test', // Local Development URL for BrowserSync. Change as-needed.
	build 				= './build/', // Files that you want to package into a zip go here
	vendors				= './assets/js/vendor/',
	source 				= './assets/', 	// Your main project assets and naming 'source' instead of 'src' to avoid confusion with gulp.src
	bower 				= './assets/bower_components/' // Not truly using this yet, more or less playing right now. TO-DO Place in Dev branch

// Load plugins
var gulp 				= require('gulp'),
	browserSync		= require('browser-sync'), // Asynchronous browser loading on .scss file changes
	reload				= browserSync.reload,
	autoprefixer 	= require('gulp-autoprefixer'), // Autoprefixing magic
	minifycss 		= require('gulp-uglifycss'),
	jshint 				= require('gulp-jshint'),
	uglify 				= require('gulp-uglify'),
	imagemin 			= require('gulp-imagemin'),
	newer 				= require('gulp-newer'),
	rename 				= require('gulp-rename'),
	concat 				= require('gulp-concat'),
	notify 				= require('gulp-notify'),
	cmq 					= require('gulp-merge-media-queries'),
	runSequence 	= require('gulp-run-sequence'),
	sass 					= require('gulp-sass'),
	plugins 			= require('gulp-load-plugins')({ camelize: true }),
	ignore 				= require('gulp-ignore'), // Helps with ignoring files and directories in our run tasks
	rimraf 				= require('gulp-rimraf'), // Helps with removing files and directories in our run tasks
	zip 					= require('gulp-zip'), // Using to zip up our packaged theme into a tasty zip file that can be installed in WordPress!
	plumber 			= require('gulp-plumber'), // Helps prevent stream crashing on errors
	pipe 					= require('gulp-coffee'),
	cache 				= require('gulp-cache'),
	filter 				= require('gulp-filter'),
	sourcemaps		= require('gulp-sourcemaps');
	order					= require('gulp-order');

/**
 * Browser Sync
 *
 * The 'cherry on top!' Asynchronous browser syncing of assets across multiple devices!! Watches for changes to js, image and php files
 * Although, I think this is redundant, since we have a watch task that does this already.
*/
gulp.task('browser-sync', function() {
	var files = [
		'**/*.php',
		'**/*.{png,jpg,gif}'
	];
	browserSync.init(files, {
		proxy: url
	});
});

/**
 * Styles
 *
 * Looking at src/sass and compiling the files into Expanded format, Autoprefixing and sending the files to the build folder
*/
gulp.task('styles', function () {
	return gulp.src([source+'scss/**/*.scss'])
		.pipe(plumber({
			errorHandler: function (err) {
          console.log(err);
          this.emit('end');
      }
		}))
		.pipe(sourcemaps.init())
			.pipe(sass({
				// outputStyle: 'compressed',
				errLogToConsole: true,
				outputStyle: 'nested',
				precision: 10
			}))
		.pipe(sourcemaps.write({includeContent: false}))
		.pipe(sourcemaps.init({loadMaps: true}))
		.pipe(autoprefixer('last 2 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'android 4'))
		.pipe(sourcemaps.write('.'))
		.pipe(plumber.stop())
		.pipe(gulp.dest('./dist/css'))
		.pipe(filter('**/*.css')) // Filtering stream to only css files
		.pipe(cmq()) // Combines Media Queries
		.pipe(browserSync.stream())
		.pipe(notify({ message: 'Styles task complete', onLast: true }))
});

gulp.task('styles-prod', function () {
	return gulp.src([source+'scss/**/*.scss'])
		.pipe(plumber({
			errorHandler: function (err) {
          console.log(err);
          this.emit('end');
      }
		}))
		.pipe(sourcemaps.init())
			.pipe(sass({
				outputStyle: 'compressed',
				errLogToConsole: true,
				precision: 10
			}))
		.pipe(sourcemaps.write({includeContent: false}))
		.pipe(sourcemaps.init({loadMaps: true}))
		.pipe(autoprefixer('last 2 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'android 4'))
		.pipe(sourcemaps.write('.'))
		.pipe(plumber.stop())
		.pipe(gulp.dest('./dist/css'))
		.pipe(filter('**/*.css')) // Filtering stream to only css files
		.pipe(cmq()) // Combines Media Queries
		.pipe(reload({stream:true})) // Inject Styles when style file is created
		.pipe(rename({ suffix: '-min' }))
		.pipe(minifycss({
			maxLineLen: 80
		}))
		.pipe(gulp.dest('./dist/css'))
		.pipe(reload({stream:true})) // Inject Styles when min style file is created
		.pipe(notify({ message: 'Styles task complete', onLast: true }))

});

/**
 * Scripts
 *
 * Look at src/js and concatenate those files, send them to assets/js where we then minimize the concatenated file.
*/

gulp.task('js-prod', function() {
	return gulp.src([source+'js/vendor/*.js', source+'js/global/*.js', source+'js/onload/*.js'])
		.pipe(concat('development.js'))
		.pipe(rename( {
			basename: "production",
			suffix: '-min'
		}))
		.pipe(uglify())
		.pipe(gulp.dest('./dist/js/'))
		.pipe(notify({ message: 'Scripts task complete', onLast: true }));
});


gulp.task('js', function() {
	return gulp.src([source+'js/vendor/*.js', source+'js/global/*.js', source+'js/onload/*.js'])
		.pipe(concat('development.js'))
		.pipe(gulp.dest('./dist/js'))
		.pipe(notify({ message: 'Scripts task complete', onLast: true }));
});
/**
 * jsHint Tasks
 *
 * Scan our own JS code excluding vendor JS libraries and perform jsHint task.
 */
gulp.task( 'jsHint', function() {
	return gulp.src( [ source+'js/**/*.js' ] )
		.pipe(jshint('.jshintrc'))
		.pipe(jshint.reporter('default'))
		.pipe( notify( { message: 'jsHint task complete', onLast: true } ) );
} );

/**
 * Images
 *
 * Look at src/images, optimize the images and send them to the appropriate place
*/
gulp.task('images', function() {

// Add the newer pipe to pass through newer images only
	return gulp.src([source+'img/raw/**/*.{png,jpg,gif}'])
		.pipe(rimraf({ force: true }))
		.pipe(imagemin({ optimizationLevel: 5, progressive: true, interlaced: true }))
		.pipe(gulp.dest(source+'img/'))
		.pipe( notify( { message: 'images task complete', onLast: true } ) );
});

// Break out the JS task to allow for true css injection on watch
gulp.task('js-watch', ['js'], browserSync.reload);


// ################################################ //
// #############  run: gulp build  ################ //
// ################################################ //

gulp.task('build', function() {
	runSequence('styles-prod', 'js-prod', 'images');
});


// ########################################## //
// #############  run: GULP  ################ //
// ########################################## //

gulp.task('default', ['styles', 'js', 'jsHint', 'images', 'browser-sync'], function () {
	gulp.watch(source+"scss/**/*.scss", ['styles']);
	gulp.watch(source+'js/**/*.js', ['js-watch']);
	gulp.watch(source+'js/**/*.js', ['jsHint']);
	gulp.watch(source+'img/**/*.{png,jpg,gif}', ['images']);
});
