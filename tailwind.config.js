// const defaultTheme = require("tailwindcss/defaultTheme");

const { fontSize } = require("tailwindcss/defaulttheme");

module.exports = {
  purge: [
    "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
    "./storage/framework/views/*.php",
    "./resources/views/**/*.blade.php",
  ],

  theme: {
    extend: {
      fontFamily: {
        inter: ["Inter", "sans-serif"],
        mulish: ["Mulish", "sans-serif"],
      },
      zIndex: {
        "-10": "-10",
      },
      colors: {
        "eph-white": "#ffffff",
        "eph-blue": {
          DEFAULT: "#0089d0",
          light: "#f2f9fc",
        },
        "eph-purple": {
          darker: "#833de8" /* .btn-primary:active */,
          DEFAULT: "#a850ff",
          lighter: "#eadffc" /* .btn-secondary:active */,
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
        "eph-error": "#ffc226",
        "eph-success": "#2dca8c",
      },
    },
  },

  variants: {
    extend: {
      opacity: ["disabled"],

      boxShadow: ["active"],
      backgroundColor: ["active"],
      borderColor: ["active"],

      borderWidth: ["hover"],
    },
  },

  plugins: [require("@tailwindcss/typography"), require("@tailwindcss/forms")],
};
