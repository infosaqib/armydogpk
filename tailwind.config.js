/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
      colors: {
        primary: {
          50: '#fff5f0',
          100: '#fee8dc',
          200: '#fdd0b9',
          300: '#fcae88',
          400: '#fa864c',
          500: '#f9681f',
          600: '#f85606',
          700: '#d14905',
          800: '#af3d04',
          900: '#8c3103',
          DEFAULT: '#f85606',
        },
        dark: '#1F2937',
      },
      fontFamily: {
        sans: ['Inter', 'sans-serif'],
      },
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('@tailwindcss/typography'),
  ],
}
