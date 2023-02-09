@vite('resources/js/app.js')

<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Create page</title>
        <link rel="stylesheet" href="{{ asset('css/create.css') }}">
    </head>

    <body class="w-full h-full bg-gray-100">

        @if (Auth::user()->is_admin === "true")
        <form action="{{ route('bord.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="w-4/5 mx-auto">
                <div class="flex text-center py-5 justify-center">

                    {{-- Name input --}}
                    <input type="text" name="name" placeholder="Page name..."
                        class="bg-white block rounded-lg h-20 text-3xl outline-none border-none drop-shadow-xl w-max text-center font-bold"
                        value="{{ $page->name }}">

                </div>

                <hr class="border border-1 border-gray-300">

                <div class="py-10 px-5 absolute top-2 left-2">
                    <a class="primary-btn inline text-base sm:text-xl bg-gray-500 py-4 px-4 shadow-xl transition-all hover:bg-gray-400 font-normal"
                        href="{{ route('bord.index') }}">
                        Go back
                    </a>
                </div>

                {{-- Errors --}}
                @if ($errors->any())
                <div class="pb-8">
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

                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">



                {{-- Markdown checkbox --}}
                <div class="flex flex-row my-5 w-11/12 mx-auto">
                    <input type="checkbox" id="ckbx" name="checkbox"
                        class="bg-white block rounded-lg h-10 w-10 outline-none border-none mx-4 my-0 shadow-lg drop-shadow-xl">
                    <label class="text-center leading-6 h-6 text-xl items-center text-gray-200 my-auto ljus"
                        for="md">Markdown content</label>
                </div>

                <div class="flex flex-row justify-between w-full rounded-b-xl h-3/6" id="input-wrapper">
                    <div
                        class="flex flex-row justify-around bg-white py-14 px-14 mt-4 w-11/12 shadow-lg rounded-b-xl transition-all h-4/6 min-h-full content-el">

                        {{-- Content input --}}
                        <textarea name="content" placeholder="Content..." contenteditable="true" type="text"
                            class="h-full w-full flex flex-col px-2 none w-3xl none bg-white rounded-lg text-xl outline-none border mx-4 drop-shadow-xl resize-none"
                            contenteditable="true">{{ $page->content }}</textarea>

                        {{-- Image preview --}}
                        <div class="hidden" id="preview-el">
                            <img id="preview" alt="Select an image to preview it here"
                                class=" w-max max-h-96 max-w-full">
                        </div>

                        {{-- Stored image --}}
                        <div id="img-div" class="flex justify-end">
                            <img src="{{ URL::to('/') }}/images/{{ $page->image }}" alt="image"
                                class=" w-max max-h-96 max-w-full">
                        </div>
                    </div>
                </div>

                {{-- Image selector --}}
                <div class="bg-grey-lighter py-10 flex flex-row justify-between items-center w-11/12 mx-auto">
                    <label
                        class="w-44 flex flex-col items-center py-3 bg-white rounded-lg shadow-lg tracking-wide uppercase border cursor-pointer my-4">
                        <span class="text-base leading-6 h-6 text-center items-center table-cell">
                            Select an image
                        </span>
                        <input type="file" name="image" class="hidden">
                    </label>

                    {{-- Submit button --}}
                    <button type="submit"
                        class="primary-btn uppercase mt-15 bg-gray-500 text-gray-900 text-lg font-extrabold py-4 px-8 leading-none h-16 transition-all hover:bg-gray-400">
                        Submit page
                    </button>
                </div>

        </form>
        </div>
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
        <script src="{{ asset('js/edit.js') }}"></script>
    </body>

</html>