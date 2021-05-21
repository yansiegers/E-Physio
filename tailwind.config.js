const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
        colors: {
          "eph-blue": {
            DEFAULT: "#0089d0",
            light: "#f2f9fc",
          },
          "eph-purple": {
            DEFAULT: "#a850ff",
            light: "#f6edff",
          },
          "eph-black": {
            DEFAULT: "#2c303d",
            light: "#9fa3b6",
          },
          "eph-grey": {
            DEFAULT: "#929db1",
            light: "#f3f7fa",
          },
        },
        // fontFamily: {
        //   sans: ["Poppins", "sans-serif"],
        //   serif: ["Lora", "serif"],
        //   cursive: ["Coming Soon", "cursive"],
        // },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
