<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Edit</title>
        @vite('resources/js/app.js')
    </head>

    <body>
        <div class="w-4/5 mx-auto">
            <div class="text-center pt-20">
                <h1 class="text-3xl text-gray-700">
                    Edit cards
                </h1>
                <hr class="border border-1 border-gray-400 mt-10">
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
                <a class="primary-btn inline text-base sm:text-xl bg-blue-400 py-4 px-4 shadow-xl rounded-full transition-all hover:bg-blue-300"
                    href="{{ route('bord.index') }}">
                    Go Back
                </a>
            </div>

            @foreach ($pages as $page)
            @if (Auth::id() === $page->user->id)
            <div class="m-auto pt-4 mb-40">

                {{-- Errors --}}


                <form action="{{ route('bord.update_cards', $page->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')

                    {{-- Page name --}}
                    <h2 class="text-3xl text-center pb-2">
                        {{ $page->name }}
                    </h2>


                    <input type="text" name="primary_card" value="{{ $page->primary_card }}"
                        class="bg-transparent block border-b-2 w-full h-20 text-2xl outline-none">
                    <input type="text" name="secondary_card" value="{{ $page->secondary_card }}"
                        class="bg-transparent block border-b-2 w-full h-20 text-2xl outline-none">

                    <div class="float-right">
                        <button type="submit"
                            class="uppercase mt-15 bg-blue-400 text-gray-900 text-lg font-extrabold py-4 px-8 rounded-3xl mt-2 mb-2">
                            Save cards
                        </button>

                        {{-- <div class="flex flex-row justify-around border-gray-300 border-2 max-w-2xl m-auto">
                            <div class="bg-grey-lighter py-10">
                                <label
                                    class="w-44 flex flex-col items-center px-2 py-3 bg-white-rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer bg-blue-400 hover:bg-blue-500">
                                    <span class="mt-2 text-base leading-normal">
                                        Primary Card
                                    </span>
                                    <input type="file" name="image" class="hidden">
                                </label>
                            </div>
                            <div class="bg-grey-lighter py-10">
                                <label
                                    class="w-44 flex flex-col items-center px-2 py-3 bg-white-rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer bg-blue-300 hover:bg-blue-200">
                                    <span class="mt-2 text-base leading-normal">
                                        Secondary Card
                                    </span>
                                    <input type="file" name="image" class="hidden">
                                </label>
                            </div>
                        </div> --}}

                    </div>
                </form>
            </div>

            @endif
            @endforeach

            <div class="mx-auto pb-10 w-4/5">
                {{ $pages->links() }}
            </div>
    </body>

</html>