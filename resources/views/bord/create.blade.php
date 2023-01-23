<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Create page</title>
        @vite('resources/js/app.js')
    </head>

    <body class="w-full h-full bg-gray-100">
        <div class="w-4/5 mx-auto">
            <div class="text-center pt-20">
                <h1 class="text-3xl text-gray-700">
                    Add new page
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
                <form action="{{ route('bord.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

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
    </body>

</html>