@vite('resources/js/app.js')
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>

    <body class="overflow-y-hidden text-center font-bold w-full h-full bg-gray-100">

        <div class="mx-auto w-4/5 pb-0 pt-2">
            <div class="bg-blue-500 text-white font-bold rounded-t px-4 py-2 mt-24">
            </div>
            <div class="border border-t-1 border-blue-400 rounded-b bg-blue-100 px-4 py-10 text-center text-xl">
                <p>We can't find that page, sorry!</p>
            </div>
        </div>

        <div class="py-10 sm:py-20">
            <form class="primary-btn inline sm:text-xl text-2xl bg-blue-500 py-4 px-4 shadow-xl rounded-full transition-all
            hover:bg-blue-400 m-auto absolute left-1/2 top-3/6 -translate-x-1/2 -translate-y-3/4 w-52 text-center">
                <input type="button" value="Go back" onclick="history.back()">
            </form>
        </div>

    </body>

</html>