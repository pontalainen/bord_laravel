<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>

        @vite('resources/js/app.js')
    </head>

    <body>
        <div class="py-10 sm:py-20">
            <a class="primary-btn inline text-base sm:text-xl bg-blue-400 py-4 px-4 shadow-xl rounded-full transition-all
            hover:bg-blue-300 m-auto absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-3/4 w-max"
                href="{{ route('bord.index') }}">
                Project Bord
            </a>
        </div>
    </body>

</html>