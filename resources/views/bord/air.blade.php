@vite('resources/js/app.js')
@vite('resources/css/app.css')
@vite('resources/js/nfc.js')


<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="resources/css/main.css">

        <title>air page</title>
        <link rel="stylesheet" href="resources/css/app.css">
    </head>

    <body class="overflow-y-hidden text-center font-bold w-full h-full bg-gray-100">

        {{-- <input type="text" name="input" id="input-el" placeholder="Page id..." class="mt-10"> --}}

        {{-- ! Actual page --}}
        @if ( $page !== null )
        @if (Auth::user()->is_admin === 'true')
        <div class="py-10 px-5 absolute top-2 left-2">
            <a class="primary-btn inline text-base sm:text-xl bg-blue-500 py-4 px-4 shadow-xl transition-all hover:bg-blue-400 font-normal"
                href="{{ route('bord.index') }}">
                Go back
            </a>
        </div>
        @else
        <div class="py-5 px-5 absolute top-2 right-2">

            {{--* User menu --}}
            <div class="sm:flex sm:items-center sm:ml-6 mb-2 mx-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button
                            class="flex items-center text-sm font-medium text-gray-800 hover:text-gray-900 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                            <div class="text-2xl">{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <div class="flex flex-col h-fit">
                            <form method="POST" class="mb-0" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>

                            @if (Auth::user()->is_admin === "true")

                            <hr class="border border-1 border-gray-300">

                            <a href="{{ route('register_user') }}" class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100
                                focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out h-max">
                                Create user
                            </a>

                            @else

                            <style>
                                .ring-1.ring-black.rounded-md.ring-opacity-5.py-1.bg-white {
                                    height: 2.7rem;
                                }
                            </style>
                            @endif

                        </div>
                    </x-slot>
                </x-dropdown>
            </div>
            {{--* End of user menu --}}

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

                <div class="w-7/12 flex justify-end">
                    <img src="{{ URL::to('/') }}/images/{{ $page->image }}" alt="image" width="500"
                        class="w-full max-w-6xl">
                </div>
            </div>
        </div>
        @else

        <div class="mx-auto w-4/5 pb-0 pt-2">
            <div class="bg-blue-500 text-white font-bold rounded-t px-4 py-2 mt-24">
            </div>
            <div class="border border-t-1 border-blue-400 rounded-b bg-blue-100 px-4 py-10 text-center text-xl">
                <p>You cannot enter this page, sorry!</p>
            </div>
        </div>

        <div class="py-10 sm:py-20">
            <form class="primary-btn inline sm:text-xl text-2xl bg-blue-500 py-4 px-4 shadow-xl rounded-full transition-all
            hover:bg-blue-400 m-auto absolute left-1/2 top-3/6 -translate-x-1/2 -translate-y-3/4 w-52 text-center">
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
                    class="primary-btn inline sm:text-xl text-2xl bg-blue-500 py-4 px-4 shadow-xl rounded-full transition-all
                hover:bg-blue-300 m-auto absolute left-1/2 top-2/3 -translate-x-1/2 -translate-y-3/4 w-52 text-center text-black" onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    {{ __('Log Out') }}
                </x-dropdown-link>
            </form>
        </div>
        @endif
    </body>

</html>