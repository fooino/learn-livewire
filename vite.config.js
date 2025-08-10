import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/c1/app.css',
                'resources/js/c1/app.js'
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
