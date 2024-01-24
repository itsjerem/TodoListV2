@extends('layouts.app')

@section('title', 'Inscription')

@section('content')
    <div class="isolate bg-white px-6 py-24 sm:py-32 lg:px-8">
        <div class="relative max-w-2xl mx-auto">
            <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]"
                aria-hidden="true">
                <div class="relative left-1/2 -z-10 aspect-[1155/678] w-[36.125rem] max-w-none -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-40rem)] sm:w-[72.1875rem]"
                    style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                </div>
            </div>
        </div>
        <div class="mx-auto max-w-2xl text-center">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Inscription</h2>
            <p class="mt-2 text-lg leading-8 text-gray-600">Inscrivez-vous pour profiter de nos services.</p>
        </div>
        <form action="{{ route('register') }}" method="POST" class="mx-auto mt-16 max-w-xl sm:mt-20">
            @csrf
            <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                <div>
                    <label for="name" class="block text-sm font-semibold leading-6 text-gray-900">Nom</label>
                    <div class="mt-2.5">
                        <input type="text" name="name" id="name" autocomplete="name" value="{{ old('name') }}"
                            class="{{ $errors->has('name') ? 'border-2 border-red-500' : '' }} block w-full border-0 rounded-md px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        @error('name')
                            <span class="text-red-500 italic">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div>
                    <label for="email" class="block text-sm font-semibold leading-6 text-gray-900">Email</label>
                    <div class="mt-2.5">
                        <input type="email" name="email" id="email" autocomplete="email" value="{{ old('email') }}"
                            class="{{ $errors->has('email') ? 'border-2 border-red-500' : '' }} block w-full border-0 rounded-md px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        @error('email')
                            <span class="text-red-500 italic">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div>
                    <label for="password" class="block text-sm font-semibold leading-6 text-gray-900">Mot de passe</label>
                    <div class="mt-2.5">
                        <input type="password" name="password" id="password" autocomplete="new-password"
                            class="{{ $errors->has('password') ? 'border-2 border-red-500' : '' }} block w-full border-0 rounded-md px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        @error('password')
                            <span class="text-red-500 italic">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div>
                    <label for="password_confirmation" class="block text-sm font-semibold leading-6 text-gray-900">Confirmer
                        le mot de passe</label>
                    <div class="mt-2.5">
                        <input type="password" name="password_confirmation" id="password_confirmation"
                            autocomplete="new-password"
                            class="{{ $errors->has('password_confirmation') ? 'border-2 border-red-500' : '' }} block w-full border-0 rounded-md px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        @error('password_confirmation')
                            <span class="text-red-500 italic">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="m:col-span-2 mt-6 g-recaptcha" data-sitekey="6LeK-lopAAAAAOuB5I4u1P6ja9_VkY-5TtCljIJs"></div>
            <div class="sm:col-span-2 mt-6">
                <button type="submit"
                    class="w-full bg-indigo-600 border border-transparent rounded-md py-3 px-8 flex items-center justify-center text-base font-medium text-white hover:bg-indigo-700 sm:text-sm">
                    S'inscrire
                </button>
                <div class="mt-4 text-center">
                    Vous avez déjà un compte ? <a href="{{ route('login') }}"
                        class="text-indigo-600 hover:text-indigo-500">Connectez-vous ici.</a>
                </div>
            </div>
        </form>
    </div>

@endsection

@section('scripts')
    <style>
        .g-recaptcha {
            transition: opacity 1s ease-in-out, max-height 1s ease-in-out, visibility 1s ease-in-out;
            opacity: 0;
            max-height: 0;
            visibility: hidden;
            overflow: hidden;
        }

        .g-recaptcha.visible {
            opacity: 1;
            max-height: 100px;
            /* Adjust this value to fit the height of your reCAPTCHA */
            visibility: visible;
        }
    </style>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var form = document.querySelector('form');
            var inputs = form.querySelectorAll('input:not([type="hidden"]):not([type="submit"])');
            var recaptcha = document.querySelector('.g-recaptcha');

            form.addEventListener('input', function() {
                var allFilled = Array.from(inputs).every(input => input.value.trim() !== '');
                if (allFilled) {
                    recaptcha.classList.add('visible');
                } else {
                    recaptcha.classList.remove('visible');
                }
            });
        });
    </script>
@endsection
