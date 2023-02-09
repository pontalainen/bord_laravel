@vite('resources/js/app.js')

<head>
    <title>
        Register
    </title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4 text" :errors="$errors" />

        <form method="POST" action="{{ route('register_user') }}">
            @csrf

            <input type="hidden" name="is_admin" value="false">
            <input type="hidden" name="group_id" value="{{ Auth::user()->id }}">

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                    autofocus />
            </div>

            <!-- Username -->
            <div class="mt-4 text">
                <x-label for="username" :value="__('Username')" />

                <x-input id="username" class="block mt-1 w-full text-color" type="text" name="username" :value="old('username')"
                    required />
            </div>

            <!-- Password -->
            <div class="mt-4 text">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full text-color" type="password" name="password" required
                    autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4 text">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full text-color" type="password"
                    name="password_confirmation" required />
            </div>


            <div class="flex items-center justify-end mt-4 text">

                <x-button class="ml-4 login-bn">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>