@vite('resources/js/app.js')


<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="resources/css/main.css">

        <title>Document</title>
    </head>

    <body class="overflow-y-hidden text-center font-bold">

        <div class="text-center pt-10">
            <h1 class="text-3xl text-gray-700">
                <b>{{ $page->name }}</b>
            </h1>
            <hr class="border border-1 border-gray-300 mt-10">
        </div>

        <div class="h-full">
            <div class=" absolute flex flex-row top-1/3 justify-around" id="content-el">
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