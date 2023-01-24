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
        <p>
            Info:<br>
            ({{ $page }})
        </p>
        @if (Auth::user()->is_admin === 'true')
        <div class="py-10 px-5 absolute top-2 left-2">
            <a class="primary-btn inline text-base sm:text-xl bg-blue-500 py-4 px-4 shadow-xl rounded-full transition-all hover:bg-blue-400 font-normal"
                href="{{ route('bord.index') }}">
                Go back
            </a>
        </div>
        @else
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit"
                class="absolute top-8 right-8 primary-btn inline text-base sm:text-xl bg-blue-500 py-4 px-4 shadow-xl rounded-full transition-all hover:bg-blue-400 font-normal">
                Log out
            </button>
        </form>
        @endif

        {{-- @if (Auth::id() === $page->user_id OR Auth::user()->group_id === $page->user_id) --}}
        <div class="text-center pt-10">
            <h1 class="text-3xl text-gray-700">
                {{-- <b>{{ $page->name }}</b> --}}
            </h1>
            <hr class="border border-1 border-gray-300 mt-10">
        </div>

        <div class="h-full justify-center">
            <div class=" absolute left-2 flex flex-row justify-around bg-white py-20 mt-4 w-10/12" id="content-el">
                <div class="w-max h-max flex flex-col p-2 none">
                    {{-- {!! $content = $page->content !!} --}}
                </div>

                <div class="w-1/3">
                    {{-- <img src="{{ $page->image_path }}" alt="sample"> --}}
                    {{-- <img
                        src="file:///C:/Users/03pool09/laravel-projects/laravel/public/images/63cf9c8700ba5-test.png"
                        --}} {{-- <img src="public/images/63cfb14a4799e-Start.png" alt="sample"> --}}
                </div>
            </div>
        </div>
        {{-- @else --}}


        <div class="mx-auto w-4/5 pb-0 pt-2">
            <div class="bg-blue-500 text-white font-bold rounded-t px-4 py-2 mt-24">
            </div>
            <div class="border border-t-1 border-blue-400 rounded-b bg-blue-100 px-4 py-10 text-center text-xl">
                <p>Only administrators can enter this page, sorry!</p>
            </div>
        </div>

        <div class="py-10 sm:py-20">
            <a class="primary-btn inline sm:text-xl text-2xl bg-blue-500 py-4 px-4 shadow-xl rounded-full transition-all
            hover:bg-blue-400 m-auto absolute left-1/2 top-2/3 -translate-x-1/2 -translate-y-3/4 w-52 text-center"
                href="{{ route('dashboard') }}">
                Login admin
            </a>
        </div>

        <div class="py-10 sm:py-20">
            <a class="primary-btn inline sm:text-xl text-2xl bg-blue-500 py-4 px-4 shadow-xl rounded-full transition-all
            hover:bg-blue-400 m-auto absolute left-1/2 top-3/6 -translate-x-1/2 -translate-y-3/4 w-52 text-center"
                href="{{ route('bord.index') }}">
                Go to bord
            </a>
        </div>

        {{-- @endif --}}
    </body>

</html>