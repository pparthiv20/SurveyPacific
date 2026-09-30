/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './*.html',
    './js/**/*.js'
  ],
  theme: {
    extend: {
      colors: {
        brand: {
          blue: '#1D56D4',
          dark: '#102633',
          navy: '#01368E',
          red: '#D93B3B',
          gold: '#E8B830',
          green: '#1E9E6B',
          lightblue: '#D7EBFA',
          muted: '#5A7282',
          textdark: '#2F2F2F',
          bggray: '#FAFAFA',
          bordergray: '#D4DAE0'
        }
      },
      fontFamily: {
        inter: ['Inter', 'sans-serif'],
        helvetica: ['Helvetica Neue', 'Helvetica', 'Arial', 'sans-serif'],
        bricolage: ['Bricolage Grotesque', 'sans-serif']
      }
    }
  },
  plugins: []
};
