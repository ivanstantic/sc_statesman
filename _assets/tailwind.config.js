/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './node_modules/flowbite/**/*.js',
    './src/js/**/*.js',
    '../single.php',
    '../index.php',
    '../archive.php',
    '../category.php',
    '../author.php',
    '../page.php',
    '../header.php',
    '../search.php',
    '../footer.php',
    '../404.php',
    '../templates/**/*.php',
    '../template-parts/**/*.php',
    '../_core/blocks/**/*.php',
  ],
  theme: {
    extend: {
      fontFamily: {
        fontFamily: {
          'roboto': ["Roboto", "sans-serif"], // For Roboto
          'roboto-serif': ["Roboto Serif", "serif"], // For Roboto Serif
      },
      },
      colors: {
        'hc-gray-dark': '#212121',
        'hc-gray': '#3E3E59',
        'hc-gray-light': '#E9E9E9',
        'hc-pink': '#E05F7E',
        'hc-pink-light': '#FFDDEE',
        'hc-blue': '#E6F0FF',
        'hc-blue-dark': '#05285B',
        'hc-blue-light': '#00BEF2',
        'hc-purple': '#EADDFF',
        'hc-dark': '#0D0F1C',
      },
      borderRadius: {
        '3xl': '28px',
      },
    },
  },
  plugins: [
    require('@tailwindcss/typography'),
    require('flowbite/plugin'),
  ],
  safelist: [
    'md-block',
  ],
};
