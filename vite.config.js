import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
// import react from '@vitejs/plugin-react';
// import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        laravel([
            '/node_modules/@fortawesome/fontawesome-free/css/all.min.css',
            'resources/css/app.css',
            'resources/js/app.js',
                    ]),
        
        // react(),
        // vue({
        //     template: {
        //         transformAssetUrls: {
        //             base: null,
        //             includeAbsolute: false,
        //         },
        //     },
        // }),
    ],
    resolve: {
        alias: {
            '@': '/resources/ts',
        },
    }
});