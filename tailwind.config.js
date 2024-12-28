/** @type {import('tailwindcss').Config} */
export default {
  darkMode: 'class',
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    'node_modules/preline/dist/*.js',
  ],
  theme: {
    extend: {
    colors: {

        primary: {

          DEFAULT: '#A0E0E8', // Pastel Cyan

          light: '#B2F0F7',   // Light Pastel Cyan

          dark: '#7ED3E8',    // Dark Pastel Cyan

        },

        secondary: {

          DEFAULT: '#A7E3D0', // Pastel Emerald

          light: '#C6F6D5',   // Light Pastel Emerald

          dark: '#81E6D9',    // Dark Pastel Emerald

        },

        accent: {

          DEFAULT: '#FCE68A', // Pastel Yellow

          light: '#FEF9C3',   // Light Pastel Yellow

          dark: '#FBBF24',    // Dark Pastel Yellow

        },

        neutral: {

          DEFAULT: '#E5E7EB', // Pastel Gray

          light: '#F3F4F6',   // Light Pastel Gray

          dark: '#D1D5DB',    // Dark Pastel Gray

        },
        success: '#4caf50',  // Warna untuk status sukses

        warning: '#ff9800',  // Warna untuk status peringatan

        danger: '#f44336', // Warna untuk gawat
      },
      backgroundImage: {

        'gradient-primary': 'linear-gradient(to right, #06B6D4, #67E8F9)', // Gradien dari Cyan ke Light Cyan

        'gradient-secondary': 'linear-gradient(to right, #10B981, #6EE7B7)', // Gradien dari Emerald ke Light Emerald

      },
    },
  },
  plugins: [
    require('preline/plugin'),
  ],
}

