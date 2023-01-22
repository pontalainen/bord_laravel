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

        <h1 class="h-max leading-10 text-2xl pt-8">
            {{ $page->name }}
        </h1>

        <div class="h-full">
            <div class=" absolute flex flex-row top-1/3">
                <div class="w-max h-max flex flex-col p-2">
                    {!! $content = $page->content !!}
                </div>

                <div class="w-1/3">
                    <img src="{{ $page->image_path }}" alt="sample">
                </div>
            </div>
        </div>
    </body>

</html>