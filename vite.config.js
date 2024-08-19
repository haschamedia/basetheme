import { defineConfig } from 'vite';
import tailwindcss from 'tailwindcss';
import autoprefixer from 'autoprefixer';
// import postcss from 'postcss';

export default defineConfig({
    css: {
        postcss: {
            plugins: [
                tailwindcss('./tailwind.config.js'),
                autoprefixer(),
            ],
        },
    },
    build: {
        outDir: 'dist',
        rollupOptions: {
            input: {
                main: 'resources/js/app.js',
                // styles: 'resources/css/app.css',
            },
            output: {
                entryFileNames: 'basetheme/js/[name].js',
                chunkFileNames: 'basetheme/js/[name].js',
                assetFileNames: assetInfo => {
                    if (assetInfo.name.endsWith('.css')) {
                        return 'basetheme/css/[name].[ext]';
                    }
                    return 'basetheme/assets/[name].[ext]';
                },
            },
        },
        assetsDir: '',
        manifest: false,
    },
});
