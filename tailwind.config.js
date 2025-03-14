/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    darkMode: 'class',
    theme: {
        container:{
            center: true,
            padding: '16px',
        },
        extend: {
            colors: {
                primary: {
                    50: "#f5f3ff",
                    100: "#ede9fe",
                    200: "#ddd6fe",
                    300: "#c4b5fd",
                    400: "#a78bfa",
                    500: "#8b5cf6",
                    600: "#7c3aed",
                    700: "#6d28d9",
                    800: "#5b21b6",
                },

                dark: {
                    900: "#0f172a",
                },

                screens:{
                    '2xl' : '1320px',
                },
            },
        },
    },
    plugins: [],
};
