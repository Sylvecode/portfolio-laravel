/** @type {import('tailwindcss').Config} */
export default {
    content: [
        (module.exports = {
            content: [
                "./resources/**/*.blade.php", // Fichiers Blade (vues Laravel)
                "./resources/**/*.js", // Fichiers JavaScript
            ],
            theme: {
                extend: {},
            },
            plugins: [],
        }),
    ],
    theme: {
        extend: {},
    },
    plugins: [],
};
