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
        color_principal: '#907EE9', 
        color_fondo: '#FFEEFF', 
        color_tipografia: '#1D1C29', 
        color_icono: '#71F0C0', 
        color_subitutlo: '#0247FF', 
      },
      fontFamily: {
        titulo: ['Futura', 'sans-serif'],
        texto: ['Futura', 'sans-serif'],
      },
    },
  },
  plugins: [],
}