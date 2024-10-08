/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./index.html",
    "./src/**/*.{js,ts,jsx,tsx}",
  ],
  theme: {
    extend: {
      colors: {
        teal: {
          10: '#03A08E',   
          50: '#E6FFFA',         
          100: '#B2F5EA',      
          200: '#81E6D9',      
          300: '#4FD1C5',   
          400: '#38B2A5',       
          500: '#2C7A7F',      
          600: '#2B6A6C',      
          700: '#2C3E50',     
          800: '#234E52',     
          900: '#0D3B38',    
        }
      },
      fontFamily: {
        poppins: ['Poppins', 'sans-serif']
      }
    },
  },
  plugins: [],
}

