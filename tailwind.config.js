/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      colors: {
        primary:'#0E0E0E',
        primary2: '#121212',
        blue: '#0054F7'

      }
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

