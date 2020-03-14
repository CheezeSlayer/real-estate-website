@extends('layouts.app')
@section('content')

@include('home.layouts.home_search')

<div class="flex flex-wrap justify-center bg-gray-700">
    @foreach($homes as $home)
    
    <div class="flex-grow-0 w-64 rounded-lg overflow-hidden shadow-lg bg-gray-500 m-4 p-4" id="home-{{$home->id}}">
        <img class="rounded" src='{{ asset('images/placeholder_house.jpg') }}'>
        <a href="/home/{{$home->id}}">
            <div class="flex justify-between items-baseline p-3">
                <div class="font-bold text-xl">${{ $home->price }}</div>
                <div class="font-semibold text-lg" align="right">{{ ucfirst($home->type) }}</div>
            </div>
            
            <ul class="p-2">
                <li class="list-group-item border-0 py-0 text-secondary">{{ $home->address }}</li>
                <li class="list-group-item border-0 py-0 text-secondary">{{ $home->city }}, {{ $home->province }}</li>
                <li class="list-group-item border-0 py-0 text-secondary">Bedrooms: {{ $home->bedrooms }}</li>
                <li class="list-group-item border-0 py-0 text-secondary">Bathrooms: {{ $home->bathrooms }}</li>
            </ul>
        </a>
    </div>
    @endforeach
</div>

@endsection