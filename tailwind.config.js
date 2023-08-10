/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      // Er zijn 3 kleuren, primary, secondary en tertiary.
      colors: {
        primary: '#badfd7',
        secondary: '#161616',
        tertiary: '#f4f1d2',
      },
      // Er is 1 fontFamily, sofia-pro.
      fontFamily: {
        sofia: ['sofia-pro'],
      },
      fontSize: {
        1: ['40px'],
        2: ['36px'],
        3: ['32px'],
        4: ['28px'],
        5: ['24px'],
        6: ['18px'],
        7: ['16px'],
        8: ['14px'],
        9: ['12px'],
      },
      // De fontSize en de Lineheight hebben dezelfde nummers omdat deze samen als 1 worden weergegeven in de sketch. 
      lineHeight: {
        1: ['48px'],
        2: ['40px'],
        3: ['40px'],
        4: ['32px'],
        5: ['32px'],
        6: ['32px'],
        7: ['24px'],
        8: ['24px'],
        9: ['16px'],
      },
    },
  },
  plugins: [],
}