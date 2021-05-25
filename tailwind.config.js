const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            fontSize: {
                '10xl': '8rem',
            },
            fontFamily: {
                'balsamiq': ['Balsamiq'],
                'goblin-one': ['Goblin One'],
                'open-sans': ['Open Sans'],
            },
            letterSpacing: {
                widest: '.25em',
            },
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
