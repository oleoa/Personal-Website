/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue"
  ],
  theme: {
    extend: {
      colors: {
        'primary': {
          100: '#3A0CA3',
          200: '#7209B7'
        },
        'secondary': '#161616',
      }
    },
  },
  plugins: [],
  darkMode: 'class',
}
