module.exports = {
  purge: [
    "./storage/framework/views/*.php",
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    // './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
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
  },
  variants: {
    extend: {},
  },
  plugins: [],
};
