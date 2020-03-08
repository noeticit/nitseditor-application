const mix = require('laravel-mix');

require('laravel-mix-alias');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.options({
    postCss: [
        require('autoprefixer'),
    ],
});

mix.alias({
    'NitsAssets': 'node_modules/nitseditor-frontend/Assets',
});

mix.webpackConfig({
    node: {
        fs: "empty"
    },
    output: {
        publicPath: '/',
        chunkFilename: 'nits-assets/chunks/[name].[chunkhash].js',
    }
});

const tailwindcss = require('tailwindcss');

mix.sass('resources/sass/app.scss', 'nits-assets/css')
    .options({
        processCssUrls: false,
        postCss: [ tailwindcss('./tailwind.config.js') ],
    })
    .js('resources/js/app.js', 'nits-assets/js')
    .sourceMaps().version();
