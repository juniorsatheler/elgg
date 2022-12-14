// Karma configuration
// Generated on Fri May 22 2015 12:59:26 GMT-0400 (EDT)

module.exports = function(config) {
	config.set({

		// base path that will be used to resolve all patterns (eg. files, exclude)
		basePath: '../../..',

		// frameworks to use
		// available frameworks: https://npmjs.org/browse/keyword/karma-adapter
		frameworks: ['jasmine', 'requirejs'],

		// list of files / patterns to load in the browser
		files: [
			'engine/tests/js/prepare.js',

			'vendor/npm-asset/jquery/dist/jquery.js',
			
			// these libs get loaded directly
			'views/default/core/js/elgglib.js',
			'views/default/core/js/deprecated.js',
			'views/default/core/js/hooks.js',

			'node_modules/formdata-polyfill/formdata.min.js',
			
			'engine/tests/js/requirejs.config.js',
			
			// these js files can all be loaded via requirejs
			{pattern:'engine/tests/js/*Test.js',included:false},
			{pattern:'views/default/**/*.js',included:false},
			{pattern:'vendor/npm-asset/**/*.js',included:false},
			{pattern:'node_modules/**/*.js',included:false}
		],


		// list of files to exclude
		exclude: [
		],


		// preprocess matching files before serving them to the browser
		// available preprocessors: https://npmjs.org/browse/keyword/karma-preprocessor
		preprocessors: {
		},


		// test results reporter to use
		// possible values: 'dots', 'progress'
		// available reporters: https://npmjs.org/browse/keyword/karma-reporter
		reporters: ['progress'],


		// web server port
		port: 9876,


		// enable / disable colors in the output (reporters and logs)
		colors: true,


		// level of logging
		// possible values: config.LOG_DISABLE || config.LOG_ERROR || config.LOG_WARN || config.LOG_INFO || config.LOG_DEBUG
		logLevel: config.LOG_INFO,


		// enable / disable watching file and executing tests whenever any file changes
		autoWatch: false,


		// start these browsers
		// available browser launchers: https://npmjs.org/browse/keyword/karma-launcher
		browsers: ['PhantomJS'],


		// Continuous Integration mode
		// if true, Karma captures browsers, runs the tests and exits
		singleRun: false
	});
};
