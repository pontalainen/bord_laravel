@vite('resources/js/app.js')

<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Edit cards</title>

        <style>
            #scanButton {
                display: none;
            }
        </style>
    </head>


    <body class="w-full h-full bg-gray-100">
        @if (Auth::user()->is_admin === "true")
        <div class="w-4/5 mx-auto">
            <div class="text-center pt-20">
                <h1 class="text-4xl text-gray-250">
                    Edit cards
                </h1>
                <hr class="border border-1 border-gray-300 mt-10">
            </div>

            <div class="pb-8">
                @if (session()->has('message'))
                <div class="mx-auto w-4/5 pb-0 pt-2">
                    <div class="bg-green-500 text-white font-bold rounded-t px-4 py-2">
                        Success
                    </div>
                    <div class="border border-t-1 border-green-400 rounded-b bg-green-100 px-4 py-3 text-center">
                        {{ session()->get('message') }}
                    </div>
                </div>
                @endif
            </div>

            <div class="py-10 px-5 absolute top-2 left-2">
                <a class="primary-btn inline text-base sm:text-xl bg-gray-500 py-4 px-4 shadow-xl rounded-full transition-all hover:bg-gray-400"
                    href="{{ route('bord.index') }}">
                    Go Back
                </a>

                <button id="scanButton">scan</button>
            </div>

            <div class="py-10 px-5 absolute top-2 right-2">
                <a class="primary-btn inline text-base sm:text-xl bg-gray-500 py-4 px-4 shadow-xl rounded-full transition-all hover:bg-gray-400"
                    href="{{ route('bord.cards_fruit') }}">
                    Switch to Fruit
                </a>

                <button id="scanButton">scan</button>
            </div>

            @foreach(Auth::user()->pages as $page)
            <div class="m-auto pt-4 mb-40">

                {{-- Errors --}}
                <form action="{{ route('bord.update_air', $page->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')

                    {{-- Page name --}}
                    <h2 class="text-3xl text-center pb-2 font-bold h2_cards">
                        {{ $page->name }}
                    </h2>


                    <input type="hidden" name="name" value="{{ $page->name }}">

                    <input class="primary_card" type="text" name="primary_card" value="{{ $page->primary_card }}"
                        placeholder="Card id..."
                        class="bg-white block rounded-lg w-full h-20 text-2xl outline-none border-none m-4 drop-shadow-xl">

                    <input class="secondary_card" type="text" name="secondary_card" value="{{ $page->secondary_card }}"
                        placeholder="Card id..."
                        class="bg-white block rounded-lg w-full h-20 text-2xl outline-none border-none m-4 drop-shadow-xl">

                    <div class="float-right">
                        <button type="submit"
                            class="uppercase mt-15 bg-gray-900 transition-all hover:bg-gray-400 text-gray-200 text-lg font-extrabold py-4 px-8 rounded-3xl mt-2 mb-2 drop-shadow-xl knapp">
                            Save cards
                        </button>
                    </div>

                    {{-- <div class="flex flex-row justify-around border-gray-300 border-2 max-w-2xl m-auto">
                        <div class="bg-grey-lighter py-10">
                            <label
                                class="w-44 flex flex-col items-center px-2 py-3 bg-white-rounded-lg shadow-lg tracking-wide uppercase border border-gray cursor-pointer bg-gray-400 hover:bg-gray-500">
                                <span class="mt-2 text-base leading-normal">
                                    Primary Card
                                </span>
                                <input type="file" name="image" class="hidden">
                            </label>
                        </div>
                        <div class="bg-grey-lighter py-10">
                            <label
                                class="w-44 flex flex-col items-center px-2 py-3 bg-white-rounded-lg shadow-lg tracking-wide uppercase border border-gray cursor-pointer bg-gray-300 hover:bg-gray-200">
                                <span class="mt-2 text-base leading-normal">
                                    Secondary Card
                                </span>
                                <input type="file" name="image" class="hidden">
                            </label>
                        </div>
                    </div> --}}

                </form>
            </div>

            @endforeach

            @else

            <div class="mx-auto w-4/5 pb-0 pt-2">
                <div class="bg-gray-500 text-white font-bold rounded-t px-4 py-2 mt-24">
                </div>
                <div class="border border-t-1 border-gray-400 rounded-b bg-gray-100 px-4 py-10 text-center text-xl">
                    <p>Only administrators can enter this page, sorry!</p>
                </div>
            </div>

            <div class="py-10 sm:py-20">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-dropdown-link :href="route('logout')"
                        class="primary-btn inline sm:text-xl text-2xl bg-gray-500 py-4 px-4 shadow-xl rounded-full transition-all
                    hover:bg-gray-400 m-auto absolute left-1/2 top-2/3 -translate-x-1/2 -translate-y-3/4 w-52 text-center text-black" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-dropdown-link>
                </form>
            </div>

            <div class="py-10 sm:py-20">
                <form class="primary-btn inline sm:text-xl text-2xl bg-gray-500 py-4 px-4 shadow-xl rounded-full transition-all
                hover:bg-gray-400 m-auto absolute left-1/2 top-3/6 -translate-x-1/2 -translate-y-3/4 w-52 text-center">
                    <input type="button" value="Go back" onclick="history.back()">
                </form>
            </div>

            @endif

            <script type="module" src="{{ asset('js/send_card.js') }}"></script>
    </body>

</html>