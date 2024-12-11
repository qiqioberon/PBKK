<x-guest-layout>


    <div class="flex flex-wrap min-h-screen w-full content-center justify-center bg-white py-10">
        <div class="flex shadow-xl w-fit">
            <div class="flex flex-wrap content-center justify-center rounded-l-md bg-white w-[24rem] h-fit shadow-md">

                <div class="w-72 my-4">
                    <h5 class="font-[LemonMilk] font-bold text-4xl text-[#54C4DB]">TOKO INDIA</h5>
                    <h1 class="text-xl font-semibold pt-5">Welcome Customer</h1>
                    <small class="text-gray-400">
                        Please enter your details, we're happy you're here
                    </small>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- Name -->
                        <div>
                            <x-input-label class="text-black" for="name" :value="__('Name')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                                :value="old('name')" required autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <!-- Email Address -->
                        <div class="mt-4">
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                                :value="old('email')" required autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- Password -->
                        <div class="mt-4">
                            <x-input-label for="password" :value="__('Password')" />

                            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password"
                                required autocomplete="new-password" />

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
                    <div class="text-center pt-5">
                        <span class="text-xs text-gray-400 font-semibold">
                            Already have an account?
                        </span>
                        <a href="{{ route('login') }}" class="text-sm font-semibold text-purple-700">
                            Log in
                        </a>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap  rounded-r-md w-[25rem] h-full shadow-md">
                <img class="w-full h-full object-cover rounded-r-md"
                    src="https://imgx.sonora.id/crop/0x0:0x0/x/photo/2023/02/07/meme-capybarajpg-20230207091339.jpg"
                    alt="Login Background" />
            </div>

        </div>
    </div>

</x-guest-layout>
