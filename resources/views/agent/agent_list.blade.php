@extends('layouts.app')
@section('content')

@include('agent.layouts.agent_search')

<div class="flex flex-wrap justify-center bg-gray-700">
    @foreach($agents as $agent)
    <div class="flex-grow-0 w-64 rounded-lg overflow-hidden shadow-lg bg-gray-500 m-4 p-4" id="agent-{{$agent->id}}">
        <a href="/agent/{{$agent->id}}">
            <div class="flex justify-between items-baseline rounded-lg">
                <div class="w-full text-center font-bold text-xl p-1 hover:text-gray-100">{{ $agent->first_name }} {{ $agent->last_name }}</div>
            </div>
        </a>
        <div class="flex justify-center items-baseline m-2 bg-gray-600 rounded-lg">
            <button class="font-semibold text-lg">Email Me Today</button>
        </div>
    </div>
    @endforeach
</div>

@endsection