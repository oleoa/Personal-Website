/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue"
  ],
  theme: {
    extend: {
        spacing: {
            'navbar-height': '5rem',
            'footer-height': '5rem',
            'margin-x-computer': '16rem',
            'margin-x-tablet': '8rem',
            'margin-x-smartphone': '1rem',
          },
          animation: {
            'loader': 'spin 2s linear infinite',
          },
    },
  },
  plugins: [],
  darkMode: 'class',
}
