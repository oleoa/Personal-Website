/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue"
  ],
  theme: {
    extend: {
      animation: {
        'loader': 'spin 2s linear infinite',
      },
    },
  },
  plugins: [],
  darkMode: 'class',
}
