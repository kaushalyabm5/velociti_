<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input placeholder="Your Name" id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="off" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input placeholder="example@gmail.com" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="off" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="age" :value="__('Age')" />
            <x-text-input placeholder="23" id="age" class="block mt-1 w-full" type="text" name="age" :value="old('age')" required autocomplete="off" />
            <x-input-error :messages="$errors->get('age')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="PhoneNumber" :value="__('Phone Number')" />
            <x-text-input placeholder="0741234567" id="PhoneNumber" class="block mt-1 w-full" type="text" name="PhoneNumber" :value="old('PhoneNumber')" required autocomplete="off" />
            <x-input-error :messages="$errors->get('PhoneNumber')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="BikeModel" :value="__('Bike Model')" />
            <x-text-input placeholder="BMW S1000RR" id="BikeModel" class="block mt-1 w-full" type="text" name="BikeModel" :value="old('BikeModel')" required autocomplete="off" />
            <x-input-error :messages="$errors->get('BikeModel')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="EngineType" :value="__('Engine Type')" />
            <x-text-input placeholder="inline four-cylinder" id="EngineType" class="block mt-1 w-full" type="text" name="EngineType" :value="old('EngineType')" required autocomplete="off" />
            <x-input-error :messages="$errors->get('EngineType')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="EngineCapacity" :value="__('Engine Capacity')" />
            <x-text-input placeholder="999cc" id="EngineCapacity" class="block mt-1 w-full" type="text" name="EngineCapacity" :value="old('EngineCapacity')" required autocomplete="off" />
            <x-input-error :messages="$errors->get('EngineCapacity')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="ModelYear" :value="__('Model Year')" />
            <x-text-input placeholder="2023" id="ModelYear" class="block mt-1 w-full" type="text" name="ModelYear" :value="old('ModelYear')" required autocomplete="off" />
            <x-input-error :messages="$errors->get('ModelYear')" class="mt-2" />
        </div>

        

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
