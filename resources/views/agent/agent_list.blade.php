@extends('layouts.app')
@section('content')

@include('agent.layouts.agent_search')

<div class="flex flex-wrap bg-gray-700 justify-center">
    @foreach($agents as $agent)
    <div class="w-64 rounded-lg overflow-hidden shadow-lg bg-gray-500 m-4 p-4" id="agent-{{$agent->id}}">
        <a href="/agent/{{$agent->id}}">
            <img class="rounded" src='{{ asset('images/placeholder_agent.jpg') }}'>
            <div class="flex justify-between items-baseline rounded-lg">
                <div class="w-full text-center font-bold text-xl p-1 hover:text-gray-100">{{ $agent->first_name }} {{ $agent->last_name }}</div>
            </div>
        </a>
        <div class="flex justify-center items-baseline rounded-lg">
            <button class="font-semibold text-lg m-2 p-2 bg-gray-600 hover:text-gray-100">Email</button>
            <button class="font-semibold text-lg m-2 p-2 bg-gray-600 hover:text-gray-100">Phone</button>
        </div>
    </div>
    @endforeach
</div>

@endsection