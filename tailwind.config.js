const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');
const { blueGray } = require('tailwindcss/colors');

module.exports = {
    theme: {
        extend: {
            fontFamily: {
                lobster: ['lobster', 'sans-serif'],
                bitter: ['bitter', 'sans-serif'],
                heading: ['dancing script', 'sans-serif'],
                lato: ['lato', 'sans-serif'],
                raleway: ['raleway', 'sans-serif'],
                open: ['open sans', 'sans-serif'],
                roboto: ['roboto', 'sans-serif'],
                source: ['source sans pro', 'sans-serif'],
            },
            colors: {
                blueGray: colors.blueGray,
                lime: colors.lime,
                orange: colors.orange,
                amber: colors.amber,
                emerald: colors.emerald
            }
        },
    },
    variants: {
        extend: {
            backgroundColor: ['active'],
        }
    },
    purge: {
        content: [
            './app/**/*.php',
            './resources/**/*.html',
            './resources/**/*.js',
            './resources/**/*.jsx',
            './resources/**/*.ts',
            './resources/**/*.tsx',
            './resources/**/*.php',
            './resources/**/*.vue',
            './resources/**/*.twig',
        ],
        options: {
            defaultExtractor: (content) => content.match(/[\w-/.:]+(?<!:)/g) || [],
            whitelistPatterns: [/-active$/, /-enter$/, /-leave-to$/, /show$/],
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
    ],
};
