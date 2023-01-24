@vite('resources/js/app.js')

<head>
    <title>
        Dashboard
    </title>
</head>
<x-guest-layo <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Welcome, {{ Auth::user()->name }}!<br> <br>
                    You won't change the world on this page, move along!
                </div>
            </div>

            <div class="flex flex-row w-96 justify-between m-auto">
                <div class="py-10 sm:py-20">
                    <a class="primary-btn inline sm:text-xl text-2xl bg-blue-500 py-4 px-4 shadow-xl rounded-full transition-all
                    hover:bg-blue-400 m-auto text-center" href="{{ route('bord.index') }}">
                        Go to Start
                    </a>
                </div>

                @if (Auth::user()->is_admin === "true")
                <div class="py-10 sm:py-20">
                    <a class="primary-btn inline sm:text-xl text-2xl bg-blue-500 py-4 px-4 shadow-xl rounded-full transition-all
                hover:bg-blue-400 m-auto text-center" href="{{ route('register_user') }}">
                        Create user
                    </a>
                </div>
                @endif
            </div>
        </div>
    </div>
    </x-app-layout>