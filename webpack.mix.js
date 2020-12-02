const mix = require('laravel-mix');

require('laravel-mix-tailwind');

mix.sass('assets/sass/app.scss', 'assets/css/')
.options({
	processCssUrls: false
})
.tailwind();