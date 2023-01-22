@vite('resources/js/app.js')


<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="resources/css/main.css">

        <title>Show page</title>
    </head>

    <body class="overflow-y-hidden text-center font-bold w-full h-full bg-gray-100">
        <div class="py-10 px-5 absolute top-2 left-2">
            <a class="primary-btn inline text-base sm:text-xl bg-blue-400 py-4 px-4 shadow-xl rounded-full transition-all hover:bg-blue-300 font-normal"
                href="{{ route('bord.index') }}">
                Go back
            </a>
        </div>
        <div class="text-center pt-10">
            <h1 class="text-3xl text-gray-700">
                <b>{{ $page->name }}</b>
            </h1>
            <hr class="border border-1 border-gray-300 mt-10">
        </div>

        <div class="h-full justify-center">
            <div class=" absolute left-2 flex flex-row justify-around bg-white py-20 mt-4 w-10/12" id="content-el">
                <div class="w-max h-max flex flex-col p-2 none">
                    {!! $content = $page->content !!}
                </div>

                <div class="w-1/3">
                    <img src="{{ $page->image_path }}" alt="sample">
                </div>
            </div>
        </div>
    </body>

</html>