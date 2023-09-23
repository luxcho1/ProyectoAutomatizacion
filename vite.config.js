import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path'; // Importa la biblioteca 'path'

export default defineConfig({
    base: 'http://191.112.8.231:8000/',
    server: {
      host: '192.168.1.94',
    },
  plugins: [
    laravel({
      input: 'resources/js/app.js', // Ruta al archivo principal de JavaScript
      sass: 'resources/sass/app.scss', // Ruta al archivo principal de Sass
      resolve: {
        alias: {
          '@': path.resolve(__dirname, 'resources/js'), // Ruta a tu carpeta de JavaScript
        },
      },
      refresh: true,
    }),
  ],
});
