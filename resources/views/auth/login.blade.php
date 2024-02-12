<x-guest-layout>
    <div class="bg-gradient-to-br from-red-900 to-black min-h-screen flex justify-center items-center">
        <div class="w-full max-w-md p-6 bg-gradient-to-br from-white to-gray-200 shadow-md rounded-md">
            <h2 class="text-3xl font-semibold mb-6 text-center text-gray-800">Login</h2>

            <x-validation-errors class="mb-4" />

            @if (session('status'))
                <div class="mb-4 text-green-600 font-medium text-sm">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}" class="space-y-4">
                @csrf

                <div>
                    <label for="email" class="block text-sm font-bold mb-1 text-gray-800">Email</label>
                    <x-input id="email" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-red-500 focus:ring-red-500" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                </div>

                <div>
                    <label for="password" class="block text-sm font-bold mb-1 text-gray-800">Password</label>
                    <x-input id="password" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-red-500 focus:ring-red-500" type="password" name="password" required autocomplete="current-password" />
                </div>

                <div class="flex items-center text-gray-800">
                    <input type="checkbox" name="remember" id="remember_me" class="h-4 w-4 text-red-500 focus:ring-red-500 border-gray-300 rounded">
                    <label for="remember_me" class="ml-2 block text-sm">Remember me</label>
                </div>

                <div class="flex flex-col md:flex-row items-center justify-between">
                    @if (Route::has('password.request'))
                        <a class="text-sm text-black hover:text-yellow-500 mb-2 md:mb-0" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif

                    <x-button class="mt-4 md:mt-0 w-full md:w-auto bg-yellow-500 hover:bg-yellow-600 text-black">
                        {{ __('Log in') }}
                    </x-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>







