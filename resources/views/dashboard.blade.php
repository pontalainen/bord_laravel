@vite('resources/js/app.js')

<head>
    <title>
        Dashboard
    </title>
</head>
<x-guest-layo <x-app-layout>
    <x-slot name="header">
        <a class="font-semibold text-xl text-gray-800 leading-tight" href="{{ route('dashboard') }}">
            {{ __('Dashboard') }}
        </a>
        <div class="sm:flex sm:items-center sm:ml-6">
            <x-dropdown align="right" width="48">
                <x-slot name="trigger">
                    <button
                        class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                        <div class="text-lg">{{ Auth::user()->name }}</div>

                        <div class="ml-1">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                    </button>
                </x-slot>

                <x-slot name="content">


                    <div class="flex flex-col">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>

                        @if (Auth::user()->is_admin === "true")
                        <hr class="border border-1 border-gray-300 mx-2 -mt-4">

                        <a href="{{ route('register_user') }}" class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100
                            focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out">
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
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Welcome to your dashboard, {{ Auth::user()->name }}!<br> <br>
                    You won't change the world on this page though. So move along!
                </div>
            </div>

            <div class="py-10 sm:py-20 w-full flex">
                <a class="primary-btn inline sm:text-xl text-2xl bg-blue-500 py-4 px-4 shadow-xl rounded-full transition-all
                    hover:bg-blue-400 m-auto text-center justify-center" href="{{ route('bord.index') }}">
                    Go to Start
                </a>
            </div>

        </div>
    </div>
    </div>
    </x-app-layout>