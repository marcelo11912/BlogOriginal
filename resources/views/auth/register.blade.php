<div class="bg-gray-200">
    <x-guest-layout>
        <div class="py-24">
            <div class="flex bg-white rounded-lg shadow-lg overflow-hidden mx-auto max-w-sm lg:max-w-3xl">
                <div class="hidden lg:block lg:w-96 bg-cover content-center">
                    <br>
                    <img src="{{ asset('storage/auth/register.jpg') }}" class="mt-16 w-full h-3/5 ">

                </div>
                <div class="ml-6 w-full p-8 lg:w-1/2">
                    <h2 class="text-2xl font-semibold text-gray-700 text-center mb-2">REGISTRATE AHORA!</h2>
                    <p class="text-sm text-gray-600 text-center">Registrarse es gratis y solo toma un minuto</p>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="mt-4">
                            <label class="block text-gray-700 text-sm font-bold ">Nombre de Usuario</label>
                            <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name"
                                :value="old('name')" required autofocus autocomplete="name" />
                        </div>

                        <div class="mt-4">
                            <label class="block text-gray-700 text-sm font-bold ">Correo electrónico</label>
                            <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email"
                                :value="old('email')" required autofocus />
                        </div>

                        <div class="mt-4">
                            <div class="flex justify-between">
                                <label class="block text-gray-700 text-sm font-bold ">Contraseña</label>
                            </div>
                            <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password"
                                required autocomplete="current-password" />
                        </div>

                        <div class="mt-4">
                            <div class="flex justify-between">
                                <label class="block text-gray-700 text-sm font-bold">Confirmar Contraseña</label>
                            </div>
                            <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password"
                                name="password_confirmation" required autocomplete="new-password" />
                        </div>
                        <x-jet-validation-errors class="mt-2 mb-4" />

                        <div class="mt-6">
                            <button
                                class="bg-gray-700 text-white font-bold py-2 px-4 w-full rounded hover:bg-gray-600">Crear
                                Cuenta</button>
                        </div>
                        
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                            {{ __('¿Ya está registrado?') }}
                        </a>
                    </form>
                </div>
            </div>
        </div>


    </x-guest-layout>
</div>
