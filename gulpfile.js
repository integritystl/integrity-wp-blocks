"use strict";

var gulp 				= require('gulp');
var sass 				= require('gulp-sass');
var maps 				= require('gulp-sourcemaps');
var gutil 			= require('gulp-util');
var uglify      = require('gulp-uglify');
var concat      = require('gulp-concat');
var plumber			= require('gulp-plumber');
var notify 			= require('gulp-notify');
var browserSync	= require("browser-sync").create();

var autoprefixer = require('gulp-autoprefixer');
var bourbon			= require('bourbon').includePaths;
var neat				= require('bourbon-neat').includePaths;

// Define project specific variables
var theme_path = './wp-content/themes/project-name/';
var dev_url = 'project-name.local';
var autoprefixerOptions = {
  browsers: ['last 2 versions', '> 5%']
};

var reportError = function (error) {
	notify({
		title: 'Compile Error in ' + error.plugin,
		message: error.toString()
	}).write(error);

}

gulp.task("serve", ['compileSass', 'js'], function() {
	browserSync.init({
			proxy: dev_url,
			port: 4200
	});
	gulp.watch( theme_path + 'sass/**/*.scss', ['compileSass']);
	gulp.watch( theme_path + '*.php').on('change', browserSync.reload);
  gulp.watch(theme_path + 'js/src/*.js', ['js']);
});

gulp.task("compileSass", function(){
	return gulp.src( theme_path + "sass/**/*.scss")
		.pipe(plumber({ errorHandler: reportError }))
		.pipe(maps.init())
		.pipe(sass({
			includePaths: [].concat(bourbon, neat),
			outputStyle: 'expanded'
		}))
		.pipe(autoprefixer(autoprefixerOptions))
		.pipe(maps.write('./maps'))
		.pipe(gulp.dest(theme_path))
		.on('error', reportError)
    .pipe(browserSync.stream());
});


gulp.task('js', function() {
  return gulp.src( theme_path + "js/src/*.js")
  .pipe(uglify())
  .pipe(concat('app.js'))
  .pipe(gulp.dest(theme_path + "js/"))
  .on('error', reportError)
  .pipe(browserSync.stream());
});

// create a task that ensures the `js` task is complete before
// reloading browsers
gulp.task('js-watch', ['js'], function (done) {
    browserSync.reload();
    done();
});

gulp.task("default", ['serve']);
