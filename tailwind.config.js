import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './resources/views/**/*.blade.php',
        './resources/css/**/*.css',
        './resources/js/**/*.js',
    ],
    theme: {
        extend: {
            screens: {
                'xs': '300px', // => @media (min-width: 300px) { ... }
                'sm': '576px', // => @media (min-width: 576px) { ... }
                'md': '768px', // => @media (min-width: 768px) { ... }
                'lg': '992px', // => @media (min-width: 992px) { ... }
                'xl': '1220px', // => @media (min-width: 1220px) { ... }
                '2xl': '1536px', // => @media (min-width: 1536px) { ... }
            },
            fontFamily: {
                'sans': [...defaultTheme.fontFamily.sans],
                'poppins': ['Poppins', 'sans-serif'],
                'rubik': ['Rubik', 'sans-serif'],
                'open-sans': ['Open Sans', 'sans-serif'],
                'lato': ['Lato', 'sans-serif'],
            },
            borderWidth: {
                DEFAULT: '1px',
                '0': '0',
                '2': '2px',
                '3': '3px',
                '4': '4px',
                '6': '6px',
                '8': '8px',
                '12': '12px',
                '18': '18px',
                '20': '20px'
            },
            zIndex: {
                '60': '60',
                '70': '70',
                '80': '80',
                '90': '90',
                '100': '100',
            },
            // colors: {
            //     'primary': '#78350f',
            //     'secondary': '#e2e8f0',
            //     'basic': '#1e293b',
            //     'floor': '#f1f5f9',
            //     'hascha': {
            //         50: '#ebeaf6',
            //         100: '#d7d6ed',
            //         200: '#c4c1e4',
            //         300: '#b0addc',
            //         400: '#8984ca',
            //         500: '#756fc2',
            //         600: '#625ab9',
            //         700: '#4e46b0',
            //         800: '#3b32a8',
            //         900: '#292375',
            //         950: '#1d1954'
            //     },
            //     'media': {
            //         50: '#e6f4eb',
            //         100: '#9bd3af',
            //         200: '#69bd88',
            //         300: '#36a760',
            //         400: '#059239',
            //         500: '#059239',
            //         600: '#04742d',
            //         700: '#036627',
            //         800: '#02491c',
            //         900: '#023a16',
            //         950: '#012b11'
            //     },
            //     'ems': {
            //         50: '#f8ccb6',
            //         100: '#f6bc9d',
            //         200: '#f29a6d',
            //         300: '#f08a54',
            //         400: '#ee793c',
            //         500: '#ec6824',
            //         600: '#b05103',
            //         700: '#ea580c',
            //         800: '#d24f0a',
            //         900: '#bb4609',
            //         950: '#a33d08'
            //     },
            // },
        },
    },
    plugins: [
        defaultTheme,
        forms,
        typography,
    ],
};