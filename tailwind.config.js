module.exports = {
  darkMode: 'class', // Enable dark mode support
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  theme: {
    extend: {
      colors: {
        primary: '#3490dc', // Custom primary color
        secondary: '#ffed4a', // Custom secondary color
        accent: '#38b2ac', // Accent color for links
      },
      fontFamily: {
        sans: ['Nunito', 'sans-serif'], // Custom font family
      },
    },
  },
  plugins: [],
}


