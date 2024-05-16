import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue'

export default defineConfig({
    server:{
        hmr: {
            host: '5173-monospace-my-app-1715415535026.cluster-vyr53kd25jc2yvngldrwyq6zc4.cloudworkstations.dev',
            clientPort:'',
            // overlay:true
        },
        // port: 0
    },
    plugins: [
        laravel({
            // input: ['https://5173-monospace-my-app-1715415535026.cluster-vyr53kd25jc2yvngldrwyq6zc4.cloudworkstations.dev/resources/js/app.js'
            //         ,'https://5173-monospace-my-app-1715415535026.cluster-vyr53kd25jc2yvngldrwyq6zc4.cloudworkstations.dev/resources/css/app.css'
            //     ],
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false
                }
            }
        }),
    ],
});
