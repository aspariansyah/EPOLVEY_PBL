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
          DEFAULT: '#03A08E',    // Main color
          50: '#E6FFFA',         // Lightest shade
          100: '#B2F5EA',       // Light shade
          200: '#81E6D9',       // Lighter shade
          300: '#4FD1C5',       // Slightly lighter shade
          400: '#38B2A5',       // Slightly darker shade
          500: '#2C7A7F',       // Darker shade
          600: '#2B6A6C',       // Darker shade
          700: '#2C3E50',       // Darkest shade
          800: '#234E52',       // Darker shade
          900: '#0D3B38',       // Darkest shade
        }
      },
      fontFamily: {
        poppins: ['Poppins', 'sans-serif']
      }
    },
  },
  plugins: [],
}

