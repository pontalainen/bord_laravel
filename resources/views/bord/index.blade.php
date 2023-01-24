<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>
            Project Bord
        </title>
        @vite('resources/js/app.js')

    </head>

    <body class="w-full h-full bg-gray-100">
        <div class="w-4/5 mx-auto pb-10">
            <div class="text-center pt-12">
                <h1 class="text-4xl text-gray-700">
                    All pages of: <br>
                    <div class="mt-2">
                        <b>{{ Auth::user()->name }}</b>
                    </div>
                </h1>
                <hr class="border border-1 border-gray-300 mt-10">
            </div>

            <div class="py-2 px-5 absolute top-2 left-2 flex flex-col">
                <a class="primary-btn inline text-base sm:text-xl bg-blue-500 py-4 px-4 shadow-xl rounded-full transition-all hover:bg-blue-400 my-1"
                    href="{{ route('bord.create') }}">
                    New Page
                </a>
                <a class="primary-btn inline text-base sm:text-xl bg-blue-500 py-4 px-4 shadow-xl rounded-full transition-all hover:bg-blue-400 my-1"
                    href="{{ route('bord.cards') }}">
                    Edit cards
                </a>
            </div>

            <div class="py-6 px-5 absolute top-2 right-2">
                <a class="primary-btn inline text-base sm:text-xl bg-blue-500 py-4 px-4 shadow-xl rounded-full transition-all hover:bg-blue-400 my-1"
                    href="{{ route('dashboard') }}">
                    Dashboard
                </a>
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

        @foreach($pages as $page)
        @if (Auth::id() === $page->user_id OR Auth::user()->group_id === $page->user_id)
        <div class="w-4/5 mx-auto pb-10">
            <div class="bg-white pt-10 rounded-lg drop-shadow-2xl sm:basis-3/4 basis-full sm:mr-8 pb-10 sm:pb-0">
                <div class="w-11/12 mx-auto pb-0">
                    <h2 class="text-gray-900 text-2xl font-bold pt-6 pb-0 sm:pt-0 hover:text-gray-700 transition-all">
                        <a href="{{ route('bord.show', $page->id) }}">
                            {{ $page->id }}, {{ $page->name }}
                        </a>
                    </h2>
                    <p>
                        <a href="{{ route('bord.show', $page->id) }} ">
                            <div
                                class="text-gray-900 text-l pt-4 pb-4 sm:pt-0 hover:text-gray-700 transition-all max-h-16 overflow-hidden leading-8">
                                {!! $page->content !!}
                            </div>
                        </a>
                    </p>

                    <div class="flex flex-row">
                        <a href="{{ route('bord.edit', $page->id) }}"
                            class="block italic text-blue-400 border-b-1 mt-4 mr-4">
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
        @endif
        @endforeach

        <div class="mx-auto pb-10 w-4/5">
            {{ $pages->links() }}
        </div>

    </body>

</html>