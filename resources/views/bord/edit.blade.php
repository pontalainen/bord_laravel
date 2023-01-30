<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Edit page</title>
        @vite('resources/js/app.js')
    </head>

    <body class="w-full h-full bg-gray-100">
        @if (Auth::user()->is_admin === "true")
        <div class="w-4/5 mx-auto">
            <div class="text-center pt-20">
                <h1 class="text-4xl text-gray-700">
                    Edit: {{ $page->name }}
                </h1>
                <hr class="border border-1 border-gray-300 mt-10">
            </div>

            <div class="m-auto pt-20">

                <div class="py-10 px-5 absolute top-2 left-2">
                    <a class="primary-btn inline text-base sm:text-xl bg-blue-400 py-4 px-4 shadow-xl rounded-full transition-all hover:bg-blue-300 font-normal"
                        href="{{ route('bord.index') }}">
                        Go back
                    </a>
                </div>

                <div class="pb-8">
                    @if ($errors->any())
                    <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
                        Something went wrong...
                    </div>
                    <ul class="border border-t-0 border-red-400 rounder-b bg-red-100 px-4 py-3 text-red-700">
                        @foreach ($errors->all() as $error)
                        <li>
                            {{ $error }}
                        </li>
                        @endforeach
                    </ul>
                    @endif
                </div>
                <form action="{{ route('bord.update', $page->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')

                    <input type="text" name="name" placeholder="Name..."
                        class="bg-white block rounded-lg w-full h-20 text-2xl outline-none border-none m-4 drop-shadow-xl">

                    <textarea name="content" placeholder="Content..."
                        class="py-20 bg-white block rounded-lg w-full h-60 text-xl outline-none border-none m-4 drop-shadow-xl"></textarea>

                    <div class="bg-grey-lighter py-10">
                        <label
                            class="w-44 flex flex-col items-center px-2 py-3 bg-white rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer m-4">
                            <span class="mt-2 text-base leading-normal">
                                Select an image
                            </span>
                            <input type="file" name="image" class="hidden">
                        </label>
                    </div>

                    <div class="float-right">
                        <button type="submit"
                            class="uppercase mt-15 bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
                            Submit page
                        </button>
                    </div>
                </form>
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
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-dropdown-link :href="route('logout')"
                        class="primary-btn inline sm:text-xl text-2xl bg-blue-500 py-4 px-4 shadow-xl rounded-full transition-all
                    hover:bg-blue-400 m-auto absolute left-1/2 top-2/3 -translate-x-1/2 -translate-y-3/4 w-52 text-center text-black" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-dropdown-link>
                </form>
            </div>

            <div class="py-10 sm:py-20">
                <form class="primary-btn inline sm:text-xl text-2xl bg-blue-500 py-4 px-4 shadow-xl rounded-full transition-all
                hover:bg-blue-400 m-auto absolute left-1/2 top-3/6 -translate-x-1/2 -translate-y-3/4 w-52 text-center">
                    <input type="button" value="Go back" onclick="history.back()">
                </form>
            </div>

            @endif
    </body>

</html>