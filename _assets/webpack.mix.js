const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');
const ESLintPlugin = require('eslint-webpack-plugin');
const StylelintPlugin = require('stylelint-webpack-plugin');
const CopyPlugin = require('copy-webpack-plugin');
const ImageminPlugin = require('imagemin-webpack-plugin').default;
const ImageminMozjpeg = require('imagemin-mozjpeg');
const ImageminWebpWebpackPlugin = require('imagemin-webp-webpack-plugin');

const productionPlugins = [
  new CopyPlugin({
    patterns: [
      { from: './src/images', to: './public/images' },
    ],
  }),
  new ImageminPlugin({
    disable: !mix.inProduction(),
    pngquant: ({ quality: '65-80' }),
    plugins: [
      ImageminMozjpeg({ quality: 75 }),
    ],
  }),
  new ImageminWebpWebpackPlugin(),
];

const developmentPlugins = [
  new ESLintPlugin({
    files: './_assets/src/js/**/*.js',
  }),
  new StylelintPlugin({
    configFile: './.stylelintrc.json',
    files: './src/css/*.css',
  }),
  ...productionPlugins,
];

const plugins = mix.inProduction() ? productionPlugins : developmentPlugins;

mix.webpackConfig({
  plugins,
  output: {
    publicPath: './_assets/',
    chunkFilename: 'public/js/chunk-[id].js',
  },
});

const postCssPlugins = [
  require('postcss-import'),
  require('tailwindcss'),
  require('autoprefixer'),
];

mix.js('src/js/frontend/script.js', 'public/js/frontend')
  .js('src/js/admin/script.js', 'public/js/admin')
  .postCss('src/css/frontend/style.css', 'public/css/frontend', postCssPlugins)
  .postCss('src/css/admin/prose.css', 'public/css/admin/prose.css', postCssPlugins)
  .postCss('src/css/admin/page.css', 'public/css/admin/page.css', postCssPlugins)
  .options({
    processCssUrls: false,
  });
