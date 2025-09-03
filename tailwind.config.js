import forms from "@tailwindcss/forms";
import typography from "@tailwindcss/typography";

/* @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./vendor/protonemedia/laravel-splade/lib/**/*.vue",
        "./vendor/protonemedia/laravel-splade/resources/views/**/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.vue",
        // "./app/Forms/*.php",
        // "./app/Tables/*.php",
        "./node_modules/flowbite/**/*.js",
    ],

    theme: {
        extend: {
            colors: {
                primary: {
                    50: "#EFF4FF",
                    100: "#DEE9FF",
                    200: "#B6D0FE",
                    300: "#8FBAFE",
                    400: "#55A3FE",
                    500: "#0F8EF0",
                    600: "#096FBE",
                    700: "#055492",
                    800: "#023864",
                    900: "#01203E",
                    950: "#001429"
                    }
            }
        },
    },

    plugins: [
        forms,
        typography,
        require('flowbite/plugin'),
    ],
    darkMode: 'class',
};
