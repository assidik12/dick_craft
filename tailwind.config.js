import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Inter", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                brand: {
                    dark: "#0D1117", // Latar belakang utama
                    light: "#161B22", // Latar belakang sekunder (untuk card)
                    border: "#30363D", // Warna border
                    cyan: "#22D3EE", // Warna aksen utama
                    "cyan-light": "#67E8F9",
                },
                text: {
                    primary: "#E6EDF3", // Teks utama (putih)
                    secondary: "#8B949E", // Teks sekunder (abu-abu)
                },
            },
            boxShadow: {
                "glow-cyan": "0 0 15px rgba(34, 211, 238, 0.4)",
                "glow-cyan-light": "0 0 25px rgba(34, 211, 238, 0.6)",
            },
        },
    },
    plugins: [require("@tailwindcss/forms")],
};
