import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'node_modules/@fortawesome/fontawesome-free/css/all.min.css',
                'node_modules/bootstrap/dist/css/bootstrap.min.css',
                'resources/css/app.css',

                'node_modules/jquery/dist/jquery.min.js',
                'node_modules/bootstrap/dist/js/bootstrap.bundle.min.js',
                'resources/js/app.js'
            ],
            refresh: true,
        }),
    ],
});
