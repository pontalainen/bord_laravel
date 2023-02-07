@vite('resources/js/app.js')

<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>
            Learn OL
        </title>
    </head>

    <body class="w-full h-full bg-gray-100">
        <div class="w-4/5 mx-auto pb-10">
            <div class="text-center pt-12">
                <h1 class="text-4xl text-gray-200">
                    All pages of: <br>
                    <div class="mt-2">
                        <b>{{ Auth::user()->name }}</b>
                    </div>
                </h1>
                <hr class="border border-1 border-gray-300 mt-10" id="login-hr">
            </div>

            <div class="py-2 absolute top-2 right-2 flex flex-col">
                <div class="sm:flex sm:items-center sm:ml-6 mb-2 mx-6">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button
                                class="flex items-center text-sm font-medium text-gray-200 hover:text-blue-400 hover:border-blue-300 focus:outline-none focus:text-blue-400 focus:border-blue-400 transition duration-150 ease-in-out">
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

                                <hr class="border border-1 border-gray-300" id="login-hr">

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

            </div>

        </div>

        <div class="py-2 absolute top-2 left-2 flex flex-col">
            <div class="sm:flex sm:items-center sm:ml-6 mb-2 mx-6">
                <x-dropdown align="left" width="48">
                    <x-slot name="trigger">
                        <button
                            class="flex items-center text-sm font-medium text-gray-200 hover:text-blue-400 hover:border-blue-400 focus:outline-none focus:text-blue-400 focus:border-blue-400 transition duration-150 ease-in-out">
                            <div class="text-2xl">Actions</div>

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

                            <a href="{{ route('bord.fruit') }}" class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100
                            focus:outline-none transition duration-150 ease-in-out h-max">
                                Fruit
                            </a>

                            <hr class="border border-1 border-gray-300" id="login-hr">

                            <a href="{{ route('bord.create') }}" class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100
                            focus:outline-none transition duration-150 ease-in-out h-max">
                                New Page
                            </a>

                            <hr class="border border-1 border-gray-300" id="login-hr">

                            <a href="{{ route('bord.cards_air') }}" class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100
                                focus:outline-none transition duration-150 ease-in-out h-max">
                                Cards Air
                            </a>

                            <hr class="border border-1 border-gray-300" id="login-hr">

                            <a href="{{ route('bord.cards_fruit') }}" class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100
                                focus:outline-none transition duration-150 ease-in-out h-max">
                                Cards Fruit
                            </a>

                        </div>
                    </x-slot>
                </x-dropdown>
            </div>

        </div>

        @if (session()->has('message'))
        <div class="mx-auto w-4/5 pb-10">
            <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
                Warning
            </div>
            <div class="border border-t-1 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                {{ session()->get('message') }}
            </div>
        </div>
        @endif


        @if (Auth::user()->pages->count() <= 0) <div class="mx-auto w-4/5 pb-0 pt-2">
            <div class="bg-blue-500 text-white font-bold rounded-t px-4 py-2 mt-24">
            </div>
            <div class="border border-t-1 border-blue-400 rounded-b bg-blue-100 px-4 py-10 text-center text-xl">
                <p>You don't have any pages yet. Click on "New Page" to get started!</p>
            </div>
            @endif


            @foreach(Auth::user()->pages as $page)
            <div class="w-4/5 mx-auto pb-10">
                <div class="bg-white pt-10 rounded-lg drop-shadow-lg sm:basis-3/4 basis-full pb-10 sm:pb-0">
                    <div class="w-11/12 mx-auto pb-0">
                        <h2 class="text-gray-900 text-2xl font-bold pt-6 pb-0 sm:pt-0 transition-all">
                            <a href="{{ route('bord.air', $page->id) }}">
                                {{ $page->id }}, {{ $page->name }}
                            </a>
                        </h2>
                        <p>
                            <a href="{{ route('bord.air', $page->id) }} ">
                                <div
                                    class="text-gray-900 text-l pt-4 pb-4 sm:pt-0 transition-all max-h-16 overflow-hidden leading-8">
                                    {!! $page->content !!}
                                </div>
                            </a>
                        </p>

                        <div class="flex flex-row">
                            <a href="{{ route('bord.edit', $page->id) }}"
                                class="block italic text-blue-500 border-b-1 mt-4 mr-4">
                                Edit
                            </a>

                            <form action="{{ route('bord.destroy', $page->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="block italic text-red-500 border-b-lime-100 mt-4" type="submit">
                                    Delete
                                </button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            @endforeach

    </body>

</html>