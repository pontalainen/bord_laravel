@vite('resources/js/app.js')
@vite('resources/js/nfc.js')


<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="resources/css/main.css">

        <title>air page</title>
    </head>

    <body class="overflow-y-hidden text-center font-bold w-full h-full bg-gray-100">

        <input type="text" name="input" id="input-el" placeholder="Page id..." class="mt-10">

        {{-- ! Actual page --}}
        @if ( $page !== null )
        @if (Auth::user()->is_admin === 'true')
        <div class="py-10 px-5 absolute top-2 left-2">
            <a class="primary-btn inline text-base sm:text-xl bg-blue-500 py-4 px-4 shadow-xl rounded-full transition-all hover:bg-blue-400 font-normal"
                href="{{ route('bord.index') }}">
                Go back
            </a>
        </div>
        @else
        <div class="py-10 px-5 absolute top-2 right-2">
            <a class="primary-btn inline text-base sm:text-xl bg-blue-500 py-4 px-4 shadow-xl rounded-full transition-all hover:bg-blue-400 font-normal"
                href="{{ route('dashboard') }}">
                Dashboard
            </a>
        </div>
        @endif

        @if (Auth::id() === $page->user_id OR Auth::user()->group_id === $page->user_id)
        <div class="text-center pt-10">
            <h1 class="text-3xl text-gray-700">
                <b>{{ $page->name }}</b>
            </h1>
            <hr class="border border-1 border-gray-300 mt-10">
        </div>

        <div class="h-full justify-center">
            <div class="flex flex-row justify-between bg-white py-14 px-24 mt-4 w-11/12 shadow-lg rounded-b-xl transition-all h-4/6"
                id="content-el">
                <div class="w-max max-w-3xl h-max flex flex-col p-2 none">
                    {!! $content = $page->content !!}
                </div>

                {{-- <div class="w-7/12 flex justify-end"> --}}
                    <img src="{{ URL::to('/') }}/images/{{ $page->image }}" alt="image" width="500" class=" w-10/12">
                    {{--
                </div> --}}
            </div>
        </div>
        @else

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

        @endif

        @else
        <div class="mx-auto w-4/5 pb-0 pt-2">
            <div class="bg-blue-500 text-white font-bold rounded-t px-4 py-2 mt-24">
            </div>
            <div class="border border-t-1 border-blue-400 rounded-b bg-blue-100 px-4 py-10 text-center text-xl">
                <p>No start page has been created,
                    please contact an administrator.
                </p>
            </div>
        </div>
        <div class="py-10 sm:py-20">
            <a class="primary-btn inline sm:text-xl text-2xl bg-blue-500 py-4 px-4 shadow-xl rounded-full transition-all
            hover:bg-blue-400 m-auto absolute left-1/2 top-2/3 -translate-x-1/2 -translate-y-3/4 w-52 text-center"
                href="{{ route('dashboard') }}">
                Login admin
            </a>
        </div>
        @endif
    </body>

</html>