<x-guest-layout>
    @php
        $loginBg = asset('img/full/FOndo-kawsay-Pukllasunchis.jpg');
    @endphp
    <div
        class="login-puklla-bg relative flex min-h-screen w-full flex-col items-center justify-center bg-cover bg-center bg-no-repeat px-4 py-10 sm:px-6"
        style="background-image: url('{{ $loginBg }}'); background-attachment: fixed;">
        <div class="absolute inset-0 bg-gradient-to-b from-black/50 via-black/40 to-black/55" aria-hidden="true"></div>

        <div class="relative z-10 flex w-full max-w-md flex-col items-center">
            <a href="{{ url('/') }}" class="mb-8 block drop-shadow-lg transition-opacity hover:opacity-90" aria-label="Inicio">
                <img src="{{ asset('img/logo-asociacion-pukllasunchis.png') }}" alt="Asociación Pukllasunchis"
                    class="h-auto w-[min(100%,220px)] max-h-20 object-contain sm:max-h-24" width="220" height="62">
            </a>

            <div class="w-full rounded-2xl border border-white/10 bg-white/95 p-6 shadow-2xl backdrop-blur-sm sm:p-8">
                <h1 class="mb-6 text-center text-xl font-semibold text-gray-800">Acceder al panel</h1>

                <x-validation-errors class="mb-4" />

                @session('status')
                    <div class="mb-4 text-sm font-medium text-green-700">
                        {{ $value }}
                    </div>
                @endsession

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div>
                        <x-label for="email" value="{{ __('Correo electrónico') }}" />
                        <x-input id="email" class="mt-1 block w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    </div>

                    <div class="mt-4">
                        <x-label for="password" value="{{ __('Contraseña') }}" />
                        <x-input id="password" class="mt-1 block w-full" type="password" name="password" required autocomplete="current-password" />
                    </div>

                    <div class="mt-4 block">
                        <label for="remember_me" class="flex items-center">
                            <x-checkbox id="remember_me" name="remember" />
                            <span class="ms-2 text-sm text-gray-600">{{ __('Recordarme') }}</span>
                        </label>
                    </div>

                    <div class="mt-6 flex flex-col-reverse gap-3 sm:flex-row sm:items-center sm:justify-between">
                        @if (Route::has('password.request'))
                            <a class="text-center text-sm text-gray-600 underline decoration-gray-400 underline-offset-2 transition hover:text-red-800 sm:text-left"
                                href="{{ route('password.request') }}">
                                {{ __('¿Olvidaste tu contraseña?') }}
                            </a>
                        @endif

                        <button type="submit"
                            class="inline-flex w-full items-center justify-center rounded-full border border-transparent bg-red-700 px-6 py-2.5 text-sm font-semibold uppercase tracking-wide text-white shadow-md transition hover:bg-red-800 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 disabled:opacity-50 sm:ms-auto sm:w-auto">
                            {{ __('Ingresar') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
