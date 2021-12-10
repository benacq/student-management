module.exports = {
    purge: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            colors: {
                'custom-dark-blue': '#370069',
                'custom-light':'#f7f7f7',
                'custom-gold': '#DFB700',
                'custom-grey': '#717171',
                'blue-primary': '#4361EE',
                'custom-green': '#0CBABA'
            },

            fontSize: {
                'custom-lg': '20px',
                'custom-primary': '16px',
                'custom-secondary': '15px',
                'custom-md': '14px',
                'custom-sm': '12px',
                'custom-xsm': '10px',
            },

            boxShadow: {
                'custom-shadow': 'rgba(17, 17, 26, 0.01) 0px 4px 16px, rgba(17, 17, 26, 0.05) 0px 8px 32px;',
                'custom-hover-shadow': 'rgba(0, 0, 0, 0.1) 0px 0px 20px;'
            },

            gridTemplateColumns: {
                'fluid': 'repeat(auto-fit, minmax(12rem, 1fr))',
            },

            gridTemplateRows: {
                'fluid': '14rem',
            }


        },
    },
    variants: {
        extend: {},
    },
    plugins: [],
}
