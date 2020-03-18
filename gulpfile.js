'use strict';

// defining required dependencies
var gulp = require('gulp');
var del = require('del');
var clean = require('gulp-clean');
var watch = require('gulp-watch');
var newer = require('gulp-newer');
var sass = require('gulp-sass');
var minify = require('gulp-minify-css');
var rename = require('gulp-rename');
var uglify = require('gulp-uglify');
var concat = require('gulp-concat');
var imagemin = require('gulp-imagemin');
var browserSync = require('browser-sync');
var imageminMozjpeg = require('imagemin-mozjpeg');
var imageminPngquant = require('imagemin-pngquant');

var paths = {
	stylesheets: {
		src: 'src/scss/**/*.scss',
		dest: 'dist/css/'
	},
	scripts: {
		src: 'src/js/**/*.js',
		dest: 'dist/js/'
	},
	img: {
		src: 'src/img/**/*.{jpg,jpeg,png,svg,ico,webp}',
		dest: 'dist/img/'
	}
};

gulp.task('browserSync', function() {
	browserSync({
		proxy: "http://localhost/_PROJECTS/_ESR/digesh/",
		online: false,
		port: 1027
	});
});

//remove imaged deleted from src folder
gulp.task('clean', function (cb) {
	return del(paths.img.dest, cb);
});

// convert SCSS to CSS
gulp.task('sass', function () {
	return gulp.src(paths.stylesheets.src)
	.pipe(sass().on('error', sass.logError))
	.pipe(gulp.dest(paths.stylesheets.dest))
	.pipe(browserSync.reload({
		stream : true
	}))
});

// minify css
gulp.task('minify', function () {
	return gulp.src([paths.stylesheets.dest+'*.css', '!'+paths.stylesheets.dest+'*.min.css'])
	.pipe(rename({
		suffix: '.min'
	}))
	.pipe(minify({keepBreaks: false}))
	.pipe(gulp.dest(paths.stylesheets.dest))
	.pipe(browserSync.reload({
		stream : true
	}))
});

gulp.task('watch',['browserSync'], function () {
	gulp.watch(paths.stylesheets.src, ['sass']);
	gulp.watch('dist/css/styles.css', ['minify']);
	gulp.watch('**/*.php').on('change',browserSync.reload);
});

gulp.task('build', [`sass`, `minify`], function (){
	console.log('Building files');
})