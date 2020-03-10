@extends('layouts.app')

@section('content')
<div class="mx-auto flex justify-center items-center pt-6">
    <div class="w-96 bg-gray-800 rounded-lg shadow-xl p-6">
        <h1 class="text-semibold text-3xl text-center text-orange-500 pb-8">Sign In</h1>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div>
                <input id="email" type="email" class="p-5 w-full rounded p-3 bg-gray-700 text-gray-100 outline-none" 
                name="email" autocomplete="email" autofocus placeholder="Email Address">

                @error('email')
                    <span class="text-red-600 font-sm pt-1" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div class="pt-3">
                <input id="password" type="password" class="p-5 w-full rounded p-3 bg-gray-700 text-gray-100 outline-none" 
                name="password" autocomplete="current-password" placeholder="Password">

                @error('password')
                    <span class="text-red-600 font-sm pt-1" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>

            <div class="pt-2">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="text-white" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>

            <div class="pt-8">
                <button type="submit" class="w-full bg-gray-700 py-2 px-3 text-center uppercase rounded text-orange-500 font-bold hover:bg-gray-600">
                    Login
                </button>
            </div>

            <div class="flex justify-between pt-8 text-orange-500 text-sm font-semibold">
                <a class="btn btn-link hover:text-gray-100" href="{{ route('password.request') }}">
                    Forgot your Password?
                </a>
                <a class="btn btn-link hover:text-gray-100" href="{{ route('register') }}">
                    Register
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
