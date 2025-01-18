const { purple } = require('tailwindcss/colors');
module.exports = {
  content: [

    '../template/**/*.{html,js,twig}',
    './components/**/*.{html,js}',
    "./node_modules/flowbite/**/*.js"

  ],
  theme: {
    colors: {
      whatsapp: '#2bb826',
      primary: purple,
      secondary: '#fff',
      success: '#fff',
      info: '#fff',
      warning: '#fff',
      danger:'#fff',
      light: '#fff',
    },
    container: {
      center: true,
      padding: {
        DEFAULT: '1rem',
        sm: '1rem',
        lg: '1rem',
        xl: '3rem',
        '2xl': '4rem',
      },
     
    },
    extend: {},
  },
  plugins: [
    require('tailwindcss-rtl'),
    require('flowbite/plugin'),
    require('@tailwindcss/forms'),
    // require("daisyui"),
  ],
}
