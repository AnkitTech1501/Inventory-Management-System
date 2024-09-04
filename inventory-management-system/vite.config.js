import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
  plugins: [
    laravel({
      input: [
        'resources/js/app.js',
        'resources/css/app.css', // Ensure your custom CSS is included here
      ],
      refresh: true,
    }),
  ],
});
