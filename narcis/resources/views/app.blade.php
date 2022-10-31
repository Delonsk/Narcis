<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>Kvetinárstvo</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @routes
        @vite('resources/js/app.js')
        @inertiaHead

        <style>
            @media (min-width: 1024px) {
                .g-recaptcha {
                    justify-content: start !important;
                }
            }
            .g-recaptcha {
                display: flex;
                justify-content: center;
            }

            @font-face {
                font-family: "grafolita-script";
                src: url({{asset('font/GrafolitaScript.otf')}}) ;
                font-display: auto;
                font-style: normal;
                font-weight: 400;
                font-stretch: normal;
            }

            @font-face {
                font-family: "ff-scala-sans-pro";
                src: url({{asset('font/ScalaSansPro.otf')}});
                font-display: auto;
                font-style: normal;
                font-weight: 400;
                font-stretch: normal;
            }

        </style>

    </head>
    <body class="font-sans antialiased">
        @inertia
    </body>
</html>
