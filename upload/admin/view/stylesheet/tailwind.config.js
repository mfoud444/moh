const { purple } = require('tailwindcss/colors');
module.exports = {
  content: [

    '../template/**/*.{html,js,twig}',
    './components/**/*.{html,js}',

  ],
  theme: {
    colors: {
      whatsapp: '#2bb826',
      moh:'#d8b4fe',
      primary:purple,
      success:'#fff',
      danger:'',
    
    },
    
    extend: {},
  },
  plugins: [
    require('tailwindcss-rtl'),
    require('flowbite/plugin'),
    require('@tailwindcss/forms'),
  
  ],
}
