<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div class="flex flex-wrap min-h-screen w-full content-center justify-center bg-white py-10">
        <div class="flex shadow-xl w-fit">
            <div
                class="flex flex-wrap content-center justify-center rounded-l-md bg-white w-[24rem] h-[32rem] shadow-md">

                <div class="w-72">
                    <h5 class="font-[LemonMilk] font-bold text-4xl text-[#54C4DB]">TOKO INDIA</h5>
                    <h1 class="text-xl font-semibold pt-5">Welcome back</h1>
                    <small class="text-gray-400">
                        Welcome back! Please enter your details
                    </small>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- Email Address -->
                        <div>
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                                :value="old('email')" required autofocus autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- Password -->
                        <div class="mt-4">
                            <x-input-label for="password" :value="__('Password')" />

                            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password"
                                required autocomplete="current-password" />

                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <!-- Remember Me -->
                        <div class="block mt-4">
                            <label for="remember_me" class="inline-flex items-center">
                                <input id="remember_me" type="checkbox"
                                    class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                                    name="remember">
                                <span
                                    class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                            </label>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                                    href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif

                            <x-primary-button class="ms-5">
                                {{ __('Log in') }}
                            </x-primary-button>
                        </div>
                    </form>
                    <div class="text-center pt-5">
                        <span class="text-xs text-gray-400 font-semibold">
                            Don't have account?
                        </span>
                        <a href="{{ route('register') }}" class="text-sm font-semibold text-purple-700">
                            Register
                        </a>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap  rounded-r-md w-[25rem] h-[32rem] shadow-md">
                <img class="w-full h-full object-cover rounded-r-md"
                    src="https://imgx.sonora.id/crop/0x0:0x0/x/photo/2023/02/07/meme-capybarajpg-20230207091339.jpg"
                    alt="Login Background" />
            </div>

        </div>
    </div>

</x-guest-layout>
