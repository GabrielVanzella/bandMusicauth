@extends('layouts.main')

@section('title', 'login')


<div class="bg-login">
    <a class="navbar-brand" href="/"><img src="/img/logo_branco.png" alt=""></a>
    <x-authentication-card>

        <form method="POST" action="{{ route('login') }}" class="form-login">

            @csrf
            <h2 class="text-center">Entrar</h2>

            <x-validation-errors class="mb-4" />
            @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
            @endif

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Senha') }}" />
                <x-input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Esqueceu a senha ?') }}
                </a>
                @endif
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="row">
                <div class="col-auto">
                    <p class="conta">Não tem uma conta? <a href="">Cadastre-se </a></p>
                </div>
                <div class="col">
                    <button type="submit" id="ccid_form_sub" class=" btn btn-outline-dark">Login</button>
                </div>
            </div>
        </form>
    </x-authentication-card>
</div>