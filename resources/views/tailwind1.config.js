const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    mode: "jit",
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './node_modules/tw-elements/dist/js/**/*.js',
    ],

    theme: {

        extend: {
          color:{
            primary:'#FF6363',
            secondary:{
              100:'#E2E2D5'
              200:'#888883'
            }
          }
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [require('@tailwindcss/forms'),require('tw-elements/dist/plugin')],
};
