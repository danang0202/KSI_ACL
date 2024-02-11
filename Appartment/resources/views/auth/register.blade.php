<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        {{-- No Kartu Unit --}}
        <div class="mt-4">
            <x-input-label for="no_kartu_unit" :value="__('No Kartu Unit')" />
            <x-text-input id="no_kartu_unit" class="block mt-1 w-full" type="text" name="no_kartu_unit"
                :value="old('no_kartu_unit')" required  />
            {{-- <x-input-error :messages="$errors->get('email')" class="mt-2" /> --}}
        </div>

        <!-- Tipe Unit -->
        <div class="mt-4">
            <label class="block font-medium text-sm text-gray-700"> Tipe Unit </label>
            <div class="flex flex-col mt-2">
                <div class="flex items-center">
                    <input type="radio" id="tipe_unit_1" name="tipe_unit_id" value="1" required>
                    <label for="tipe_unit_1" class="ml-2">Amaryllis</label>
                </div>
        
                <div class="flex items-center mt-2">
                    <input type="radio" id="tipe_unit_2" name="tipe_unit_id" value="2" required>
                    <label for="tipe_unit_2" class="ml-2">Bougenville</label>
                </div>
        
                <div class="flex items-center mt-2">
                    <input type="radio" id="tipe_unit_3" name="tipe_unit_id" value="3" required>
                    <label for="tipe_unit_3" class="ml-2">Violet</label>
                </div>
        
                <div class="flex items-center mt-2">
                    <input type="radio" id="tipe_unit_4" name="tipe_unit_id" value="4" required>
                    <label for="tipe_unit_4" class="ml-2">Rose</label>
                </div>
        
                <div class="flex items-center mt-2">
                    <input type="radio" id="tipe_unit_5" name="tipe_unit_id" value="5" required>
                    <label for="tipe_unit_5" class="ml-2">Clover</label>
                </div>
        
                <div class="flex items-center mt-2">
                    <input type="radio" id="tipe_unit_6" name="tipe_unit_id" value="6" required>
                    <label for="tipe_unit_6" class="ml-2">Orchid</label>
                </div>
            </div>
        </div>

        {{-- Alamat --}}
        <div class="mt-4">
            <x-input-label for="alamat" :value="__('Alamat')" />
            <x-text-input id="alamat" class="block mt-1 w-full" type="text" name="alamat"
                :value="old('alamat')" required  />
            {{-- <x-input-error :messages="$errors->get('email')" class="mt-2" /> --}}
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
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
