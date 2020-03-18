'use strict';

// to install dependencies: npm install --save <dependency>

var gulp             = require('gulp');
var sass             = require('gulp-sass');
var sourcemaps       = require('gulp-sourcemaps');
var watch            = require('gulp-watch');
var splitFiles       = require("gulp-split-files");
var browserSync      = require('browser-sync').create();
var autoprefixer     = require('gulp-autoprefixer');

// convert SCSS to CSS and generate inside temp folder
gulp.task('sass', function() {
	return gulp.src('src/scss/**/*.scss', {base: 'src/scss'})
	.pipe(sourcemaps.init())
	.pipe(sass().on('error', sass.logError))
	.pipe(splitFiles())
	.pipe(autoprefixer({
		browsers: ['last 2 versions'],
		cascade: false
	}))
	.pipe(cleanCSS({compatibility: 'ie8'}))
	.pipe(sourcemaps.write({includeContent: false, sourceRoot: './src/scss/'}))
	.pipe(gulp.dest('dist/css/'))
	.pipe(browserSync.reload({stream: true}))
});

gulp.task('watch', function(){
	gulp.watch('src/scss/**/*.scss', gulp.series('sass'));
});

//gulp watch --no-color -> for powershell