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
            'navbar-light': '#edf2f7',
            'navbar-dark': '#2d3748',
            'sidebar-light': '#edf2f7',
            'sidebar-dark': '#2d3748',
            'footer-light': '#ffffff',
            'footer-dark': '#000000',
        },
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
