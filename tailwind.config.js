/** @type {import('tailwindcss').Config} */
module.exports = {
   content: ["./themes/posbill/assets/**/*.js", "./themes/posbill/**/*.htm"],
  theme: {
    extend: {
      colors: {
        primary: "#C1136E",
        secondary: "#FFD140",
        third: "#922775",
        fourty: "rgba(106, 0, 56, 58%)",
        fivety: "#EBEBEB",
      },
      screens: {
        smPhone: '387px',
        mdPhone: '490px',
        tablet: '857px',
        mdTablet: '1005px',
        lgTablet: '1148px',
      },
    },
  },
  plugins: [],
}
