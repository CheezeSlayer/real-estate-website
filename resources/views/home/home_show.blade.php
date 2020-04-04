@extends('layouts.app')
@section('content') 

<div class="flex justify-center">
    <div class="m-6">
        <img class="rounded" src='{{ asset('images/placeholder_house.jpg') }}'>
    </div>
    <div class="w-1/2 bg-gray-800 m-6 p-6 rounded text-gray-500">
        <div class="text-orange-500">
            <div class="font-bold text-3xl mb-2">${{number_format($home->price)}}</div>
            <div class="font-semibold text-lg mb-2">{{$home->address}}, {{$home->city}}, {{$home->province}}, {{$home->postal_code}}</div>
        </div>
        <div class="">
            <div class="font-semibold text-lg mb-2">{{ ucwords($home->type) }}</div>
            <div class="font-semibold text-lg mb-2">Bedrooms: {{$home->bedrooms}} Bathrooms: {{$home->bathrooms}}</div>
        </div>
        <div class="p-3 bg-gray-700 rounded text-gray-200">
            <p>{{ $home->description }}</p>
        </div>
        @if(isset(Auth::user()->is_admin) && Auth::user()->is_admin)
            <div class="flex justify-end text-orange-500 mt-2">
                <form action="/admin/home/{{ $home->id }}/edit" method="get">
                    @csrf
                    <button type="submit" class="p-2 hover:text-gray-100">EDIT</button>
                </form>
                <button type="button" class="p-2 hover:text-gray-100 hover:border hover:border-gray-100">
                    <p><a href="#" onclick="toggle_hidden('delete_confirm_modal');">DELETE</a></p>
                </button>
            </div>
            <div class="text-center items-center hidden" id="delete_confirm_modal">
                <div class="text-3xl text-yellow-500">ARE YOU SURE?</div>
                <form action="/admin/home/{{ $home->id }}/delete" method="post">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="bg-red-600 py-2 px-3 text-center uppercase rounded text-gray-100 font-bold hover:bg-red-700">Confirm Delete</button>
                </form>
            </div>
        @endif
    </div>
</div>

@endsection