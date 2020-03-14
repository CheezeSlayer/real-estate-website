@extends('layouts.app')
@section('content')

<div class="flex justify-center">
    <div class="w-1/4 m-6">
        <img class="rounded" src='{{ asset('images/placeholder_agent.jpg') }}'>
    </div>
    <div class="w-1/2 bg-gray-800 m-6 p-6 rounded text-gray-500">
        <div class="p-2 m-2">
            <div class="text-orange-500 font-bold text-3xl mb-2">{{$agent->first_name}} {{$agent->last_name}}</div>
            <div class="text-gray-500 text-lg mb-2">{{ $agent->city }}, {{ $agent->province }}</div>
        </div>
        <div class="bg-gray-700 p-2 m-2 rounded">
            <div class="font-semibold text-lg mb-2">Email: {{ $agent->email }}</div>
            <div class="font-semibold text-lg mb-2">Phone: {{ $agent->phone_number }}</div>
        </div>
        @if(Auth::user())
            @if(Auth::user()->is_admin)
                <div class="flex justify-end text-orange-500 mt-2">
                    <form action="/admin/agent/{{ $agent->id }}/edit" method="get">
                        @csrf
                        <button type="submit" class="p-2 hover:text-gray-100">EDIT</button>
                    </form>
                    <button type="button" class="p-2 hover:text-gray-100 hover:border hover:border-gray-100">
                        <p><a href="#" onclick="toggle_hidden('delete_confirm_modal');">DELETE</a></p>
                    </button>
                </div>
                <div class="text-center items-center hidden" id="delete_confirm_modal">
                    <div class="text-3xl text-yellow-500">ARE YOU SURE?</div>
                    <form action="/admin/agent/{{ $agent->id }}/delete" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="bg-red-600 py-2 px-3 text-center uppercase rounded text-gray-100 font-bold hover:bg-red-700">Confirm Delete</button>
                    </form>
                </div>
            @endif
        @endif
    </div>
</div>

@endsection