/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    variants: {
        extend: {
            translate: ["group-hover"],
            opacity: ["group-hover"],
            transitionProperty: ["group-hover"],
        },
    },
    darkMode: "class", // or 'media' or false
    theme: {
        extend: {},
    },
    plugins: [],
};
