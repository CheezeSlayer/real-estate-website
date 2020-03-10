@extends('layouts.app')

@section('content')
<div class="flex justify-center bg-gray-700">
    <div class="w-1/3 bg-gray-800 rounded-lg shadow-xl p-6">
        <h1 class="text-orange-500 text-3xl py-8 text-center">Sign Up</h1>

        <div class="bg-gray-700 rounded text-lg text-gray-100 p-6">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="p-2">
                    <label for="name" class="block">Name</label>
                    <input id="name" type="text" class="w-full rounded p-2 bg-gray-800 @error('name') is-invalid @enderror" 
                    name="name" value="{{ old('name') }}" autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong class="text-red-500">{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="p-2">
                    <label for="email" class="block">Email</label>
                    <input id="email" type="email" class="w-full rounded p-2 bg-gray-800 @error('email') is-invalid @enderror" 
                    name="email" value="{{ old('email') }}" autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong class="text-red-500">{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="p-2">
                    <label for="password" class="block">Password</label>
                    <input id="password" type="password" class="w-full rounded p-2 bg-gray-800 @error('password') is-invalid @enderror" 
                    name="password" autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong class="text-red-500">{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="p-2">
                    <label for="password-confirm" class="block">Confirm Password</label>
                    <input id="password-confirm" type="password" class="w-full rounded p-2 bg-gray-800" name="password_confirmation" autocomplete="new-password">
                </div>

                <div class="form-group row mb-0">
                    <div class="pt-8">
                        <button type="submit" class="w-full bg-orange-600 py-2 px-3 text-center uppercase rounded text-black font-bold hover:bg-orange-500">
                            Register
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
