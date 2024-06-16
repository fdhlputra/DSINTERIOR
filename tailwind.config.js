/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      backgroundImage: {
        'gradient-black': "linear-gradient(to bottom, rgba(0, 0, 0, 0.20) 1%, rgba(0, 0, 0, 0) 20.83%, rgba(0, 0, 0, 0.70) 93.23%)",
        'gradient-white': "linear-gradient(to bottom, rgba(255, 255, 255, 0.70) 1%, rgba(0, 0, 0, 0) 20.83%, rgba(255, 255, 255, 0.70) 93.23%)",
        'Landing': "url('/public/img/Landing/Background.svg')",
      },
      fontFamily: {
        body: ['Plus Jakarta Sans', 'sans-serif'],
        caveat: ['Caveat', 'cursive']
      },
      letterSpacing: {
        title: '4px',
      },
      fontSize: {
        title: '2.25rem',
      },
      screens: {
        'xs' : '420px'
      },
      colors: {
        'gold' : '#c38439',
      }
    },
  },
  plugins: [],
}
