/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./**/*.php", "./assets/js/**/*.js"],
    theme: {
        extend: {
            colors: {
                'accent': '#d00',
                'accent-dark': '#a00',
                'bg': '#f9f9f9',
                'text': '#333',
                'text-light': '#666',
                'black-transparent': 'rgba(0, 0, 0, 0.7)',
            },
            fontFamily: {
                'main': ['"Helvetica Neue"', 'Helvetica', 'Arial', 'sans-serif'],
                'japanese': ['"Noto Sans JP"', 'sans-serif'], // Assuming we might add this later or use system fonts
            },
            letterSpacing: {
                'widest': '0.2em',
            },
            animation: {
                'fade-in-up': 'fadeInUp 0.8s ease-out forwards',
                'pulse-slow': 'pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite',
            },
            keyframes: {
                fadeInUp: {
                    '0%': { opacity: '0', transform: 'translateY(20px)' },
                    '100%': { opacity: '1', transform: 'translateY(0)' },
                },
            },
            backgroundImage: {
                'gradient-radial': 'radial-gradient(var(--tw-gradient-stops))',
                'hero-overlay': 'linear-gradient(to bottom, rgba(0,0,0,0.3), rgba(0,0,0,0.6))',
            }
        },
    },
    plugins: [],
}
