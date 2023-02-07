@vite('resources/js/app.js')

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="resources/css/main.css">

        <title>air page</title>
        <link rel="stylesheet" href="resources/css/app.css">

        <style>
            #scanButton {
                display: none;
            }
        </style>

        <script>
            var id = [];
            var airCard = [];
        </script>
    </head>

    <body class="overflow-y-hidden text-center font-bold w-full h-full bg-gray-100">

        {{-- <input type="text" name="input" id="input-el" placeholder="Page id..." class="mt-10"> --}}

        {{-- ! Actual page --}}
        @if ( $page !== null )
        @if (Auth::user()->is_admin === 'true')
        <div class="py-10 px-5 absolute top-2 left-2">
            <a class="primary-btn inline text-base sm:text-xl bg-gray-500 py-4 px-4 shadow-xl transition-all hover:bg-gray-400 font-normal"
                href="{{ route('bord.index') }}">
                Go back
            </a>
        </div>

        @else

        <div class="py-10 px-5 absolute top-2 left-2">
            <form method="POST" action="{{ route('logout') }}" class="m-0 -mt-2">
                @csrf
                <button
                    class="primary-btn inline text-base sm:text-xl py-4 px-4 shadow-xl transition-all hover:bg-gray-400 font-normal"
                    href="{{ route('bord.index') }}">
                    Log Out
                </button>
            </form>
        </div>

        @endif

        <div class="py-10 px-5 absolute top-2 right-2">
            <a class="primary-btn inline text-base sm:text-xl py-4 px-4 shadow-xl transition-all hover:bg-gray-400 font-normal"
                href="{{ route('bord.fruit') }}">
                Go to Fruit
            </a>
        </div>

        @if (Auth::id() === $page->user_id OR Auth::user()->group_id === $page->user_id)
        <div class="text-center pt-10">
            <h1 class="text-3xl text-gray-700">
                <b>{{ $page->name }}</b>
            </h1>
            <hr class="border border-1 border-gray-300 mt-10">

            <button id="scanButton">scan</button>
        </div>

        <div class="h-full justify-center">
            <div class="flex flex-row justify-between bg-white py-14 px-24 mt-4 w-11/12 shadow-lg rounded-b-xl transition-all h-4/6"
                id="content-el">
                <div class="w-max max-w-3xl h-max flex flex-col p-2 none">
                    {!! $content = $page->content !!}
                </div>

                <div class="w-7/12 flex justify-end">
                    <img src="{{ URL::to('/') }}/images/{{ $page->image }}" alt="image" width="500"
                        class="w-full max-w-6xl">
                </div>
            </div>
        </div>
        @else

        <div class="mx-auto w-4/5 pb-0 pt-2">
            <div class="bg-gray-500 text-white font-bold rounded-t px-4 py-2 mt-24">
            </div>
            <div class="border border-t-1 border-gray-400 rounded-b bg-gray-100 px-4 py-10 text-center text-xl">
                <p>You cannot enter this page, sorry!</p>
            </div>
        </div>

        <div class="py-10 sm:py-20">
            <form class="primary-btn inline sm:text-xl text-2xl bg-gray-500 py-4 px-4 shadow-xl rounded-full transition-all
            hover:bg-gray-400 m-auto absolute left-1/2 top-3/6 -translate-x-1/2 -translate-y-3/4 w-52 text-center">
                <input type="button" value="Go back" onclick="history.back()">
            </form>
        </div>

        @endif

        @else
        <div class="mx-auto w-4/5 pb-0 pt-2">
            <div class="bg-blue-500 text-white font-bold rounded-t px-4 py-2 mt-24">
            </div>
            <div class="border border-t-1 border-blue-400 rounded-b bg-blue-100 px-4 py-10 text-center text-xl ">
                <p>No start page has been created,
                    please contact an administrator.
                </p>
            </div>
        </div>
        <div class="py-10 sm:py-20">
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-dropdown-link :href="route('logout')"
                    class="primary-btn inline sm:text-xl text-2xl bg-gray-500 py-4 px-4 shadow-xl rounded-full transition-all
                hover:bg-gray-300 m-auto absolute left-1/2 top-2/3 -translate-x-1/2 -translate-y-3/4 w-52 text-center text-black" onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    {{ __('Log Out') }}
                </x-dropdown-link>
            </form>
        </div>
        @endif
    
        @foreach($pages as $page)
      
        <script>

        window.id.push("{{ $page->id }}");
        window.airCard.push("{{ $page->primary_card }}");

        </script>

        @endforeach


        <script type="module" src="{{ asset('js/air_change_sida.js') }}"></script>
    </body>

</html>