/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'negropdt': "#171D2A",
        'rojopdt': "#DE383F"
      }
    },
  },
  plugins: [],
}
