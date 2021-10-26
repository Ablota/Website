const mix = require('laravel-mix');
const mixOptions = {
	publicPath: 'public',
	processCssUrls: false,
};

mix.options(mixOptions);

mix.sass('css/app.scss', mixOptions.publicPath + '/css/app.css');
mix.sass('css/noscript.scss', mixOptions.publicPath + '/css/noscript.css');

mix.styles([
	'css/theme/main.css',
	'css/theme/icons.css',
], mixOptions.publicPath + '/css/theme.css');
mix.styles([
	'css/theme/vendor/bootstrap.min.css',
	'css/theme/vendor/normalize.css',
	'css/theme/vendor/animate.css',
	'css/theme/vendor/swiper.min.css',
	'css/theme/vendor/aos.css',
], mixOptions.publicPath + '/css/vendor.css');

mix.scripts('js/theme/main.js', mixOptions.publicPath + '/js/theme.js');
mix.scripts([
	'js/theme/vendor/jquery-3.5.0.js',
	'js/theme/vendor/jquery-migrate.min.js',
	'js/theme/vendor/popper.min.js',
	'js/theme/vendor/bootstrap.min.js',
], mixOptions.publicPath + '/js/vendor-1.js');
mix.scripts([
	'js/theme/vendor/particles.min.js',
	'js/theme/vendor/TweenMax.min.js',
	'js/theme/vendor/ScrollMagic.js',
	'js/theme/vendor/animation.gsap.js',
	'js/theme/vendor/debug.addIndicators.min.js',
	'js/theme/vendor/swiper.min.js',
	'js/theme/vendor/countdown.js',
	'js/theme/vendor/simpleParallax.min.js',
	'js/theme/vendor/waypoints.min.js',
	'js/theme/vendor/jquery.counterup.min.js',
	'js/theme/vendor/charming.min.js',
	'js/theme/vendor/imagesloaded.pkgd.min.js',
	'js/theme/vendor/jquery.bxslider.min.js',
	'js/theme/vendor/sticky.min.js',
	'js/theme/vendor/aos.js',
], mixOptions.publicPath + '/js/vendor-2.js');

mix.copyDirectory('fonts', 'public/fonts');
mix.copyDirectory('i18n', 'public/i18n');
mix.copyDirectory('img', 'public/img');
mix.copyDirectory('layout', 'public/layout');
mix.copyDirectory('pages', 'public/pages');
