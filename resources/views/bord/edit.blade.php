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
                    Edit: {{ $page->name }}
                </h1>
                <hr class="border border-1 border-gray-300 mt-10">
            </div>

            <div class="m-auto pt-20">

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
                        class="bg-transparent block border-b-2 w-full h-20 text-2xl outline-none">

                    <textarea name="content" placeholder="Content..."
                        class="py-20 bg-transparent block border-b-2 w-full h-60 text-xl outline-none"></textarea>

                    <div class="bg-grey-lighter py-10">
                        <label
                            class="w-44 flex flex-col items-center px-2 py-3 bg-white-rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer">
                            <span class="mt-2 text-base leading-normal">
                                Select an image
                            </span>
                            <input type="file" name="image" class="hidden">
                        </label>
                    </div>

                    <button type="submit"
                        class="uppercase mt-15 bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
                        Submit page
                    </button>
                </form>
            </div>
    </body>

</html>