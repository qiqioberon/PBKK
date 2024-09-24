/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
  },
  fontFamily: {
    'lemonmilk': ['LemonMilk', 'sans-serif'],
    'poppins': ['Poppins', 'sans-serif'],
  },
  fontWeight: {
    light: 300,
    medium: 500,
    bold: 700,
  },
  plugins: [],
}