import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import daisyui from 'daisyui';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    plugins: [forms, daisyui],
    daisyui: {
        themes: [
            {
                mytheme: {
                    "primary": "#570df8",
                    "secondary": "#f000b8",
                    "accent": "#37cdbe",
                    "neutral": "#3d4451",
                    "base-100": "#ffffff",
                    "info": "#3abff8",
                    "success": "#36d399",
                    "warning": "#fbbd23",
                    "error": "#f87272",
                },
            },
            "dark",
            "cupcake",
        ],
        darkTheme: "dark", // Default dark theme
        base: true, // Applies base styles
        styled: true, // Applies DaisyUI component styles
        utils: true, // Adds utility classes
        logs: true, // Shows DaisyUI logs in the console
        rtl: false, // Right-to-left support
        prefix: "", // Adds a prefix to DaisyUI classes
    },
};