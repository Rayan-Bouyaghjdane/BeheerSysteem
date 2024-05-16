<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Voornaam')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="tussenvoegsel" :value="__('Tussenvoegsel')" />
            <x-text-input id="tussenvoegsel" class="block mt-1 w-full" type="text" name="tussenvoegsel"
                :value="old('tussenvoegsel')" autofocus autocomplete="tussenvoegsel" />
            <x-input-error :messages="$errors->get('tussenvoegsel')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="achternaam" :value="__('Achternaam')" />
            <x-text-input id="achternaam" class="block mt-1 w-full" type="text" name="achternaam" :value="old('achternaam')"
                required autofocus autocomplete="achternaam" />
            <x-input-error :messages="$errors->get('achternaam')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required autocomplete="email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="telefoon" :value="__('Telefoon')" />
            <x-text-input id="telefoon" class="block mt-1 w-full" type="text" name="telefoon" :value="old('telefoon')"
                required autocomplete="telefoonnummer" />
            <x-input-error :messages="$errors->get('telefoon')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
