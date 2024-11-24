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
        'roboto': ['Roboto', 'sans-serif'], // For Roboto
        'roboto-serif': ['Roboto Serif', 'serif'], // For Roboto Serif
        'public-sans': ['Public Sans', 'sans-serif'], // For Public Sans
      },
      colors: {
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
  safelist: [],
};
