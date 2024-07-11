module.exports = {
  content: ["./views/**/*.php"],
  darkMode: 'class',
  theme: {
    opacity: {
      '0': '0',
      '20': '0.2',
      '40': '0.4',
      '60': '0.6',
      '80': '0.8',
      '100': '1',
    },
    extend: {
      screens: {
        '3xl': '1600px',
      }
    }
  },
  plugins: [],
}