/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./**/*.{html,js,php}",
    "./src/**/*.{html,js}",
  ],
  theme: {
    extend: {
      height: {
        92: '92px',
        600: '600px',
        700: '700px',
        800: '800px',
      },
      
      colors: {
        black: {
          100: '#000000',
          200: '#1E1E1E',
        },

        white: {
          100: '#FFFFFF',
          200: '#F6F6F6',
          300: '#FFFFFFCC',
        },

        blue: {
          100: '#4243DC',
        },

        gray: {
          100: '#1E1E1ECC'
        },

        pink: {
          100: '#EF2469',
        },

        yellow: {
          100: '#FFD44B'
        }
      },

      fontSize: {
        13: '13px',
        75: '75px',
      },
    },
  },
  plugins: [],
}