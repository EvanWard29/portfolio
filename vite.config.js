import {defineConfig} from 'vite';
import laravel from 'laravel-vite-plugin';
import purge from '@erbelion/vite-plugin-laravel-purgecss'

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.scss', 'resources/js/app.js'],
            refresh: true,
        }),
        purge({
            templates: ['blade'],
            paths: ['resources/views/*'],
            safelist: ['img']
        }),
    ],
    server: {
        hmr: {
            host: 'localhost',
        },
    },
});
