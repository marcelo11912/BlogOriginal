<div class="bg-gray-200">
<x-guest-layout>
    <div class="py-24">
        <div class="flex bg-white rounded-lg shadow-lg overflow-hidden mx-auto max-w-sm lg:max-w-3xl">
            <div class="hidden lg:block lg:w-96 bg-cover">
                <img src="{{asset('storage/auth/login.jpg') }}" class="mt-14 w-full h-4/6 ">

            </div>
            <div class="ml-6 w-full p-8 lg:w-1/2">
                <h2 class="text-2xl font-semibold text-gray-700 text-center mb-2">Bienvenido!</h2>
                <p class="text-sm text-gray-600 text-center">Inicie sesión para crear y descubrir e informase de los
                    mejores posts!</p>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mt-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Correo electrónico</label>
                        <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                            required autofocus />
                    </div>
                    <div class="mt-4">
                        <div class="flex justify-between">
                            <label class="block text-gray-700 text-sm font-bold mb-2">Contraseña</label>
                        </div>
                        <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required
                            autocomplete="current-password" />
                    </div>
                    <div class="block mt-2">
                        <label for="remember_me" class="flex items-center">
                            <x-jet-checkbox id="remember_me" name="remember" />
                            <span class="ml-2 text-sm text-gray-600">{{ __('Recordarme') }}</span>
                        </label>
                    </div>
                    <x-jet-validation-errors class="mt-2 mb-4" />

                    <div class="mt-6">
                        <button
                            class="bg-gray-700 text-white font-bold py-2 px-4 w-full rounded hover:bg-gray-600">Iniciar
                            sesión</button>
                    </div>
                    @if (Route::has('password.request'))
                        <a class="text-sm text-gray-500"
                            href="{{ route('password.request') }}">
                            ¿Se te olvidó tu contraseña?
                        </a>
                    @endif

                    <div class="mt-4 flex items-center justify-between">
                        <span class="border-b w-1/5 md:w-1/4"></span>
                        <a href="{{ route('register') }}" class="text-sm text-gray-500 uppercase">Registrarse aquí</a>
                        <span class="border-b w-1/5 md:w-1/4"></span>
                    </div>
                </form>
            </div>
        </div>
    </div>


</x-guest-layout>
</div>