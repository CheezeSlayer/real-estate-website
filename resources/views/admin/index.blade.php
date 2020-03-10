@extends('layouts.app')

@section('content')

<div class="flex justify-center" id="status">
    @if(session('success'))
        <div class="flex-initial p-2 m-2 bg-gray-800 rounded text-base text-semibold text-center text-green-500">{{ session('success') }}</div>
    @endif
    @if(session('error'))
        <div class="flex-initial p-2 m-2 bg-gray-800 rounded text-base text-semibold text-center text-red-500">{{ session('error') }}</div>
    @endif
</div>

<div class="mx-auto flex justify-center items-center pt-6">
    <div class="w-96 bg-gray-800 rounded-lg shadow-xl p-6 text-center">
        <div class="text-semibold text-xl text-orange-500 pb-8">What Would You Like to Do?</div>
            <a href="/admin/home/create" class="list-group-item list-group-item-action">
                <div class="bg-gray-700 rounded text-lg text-orange-500 p-2 m-2 hover:bg-gray-600 hover:text-gray-100">
                    Add Home
                </div>
            </a>

            <a href="/admin/agent/create" class="list-group-item list-group-item-action">
                <div class="bg-gray-700 rounded text-lg text-orange-500 p-2 m-2 hover:bg-gray-600 hover:text-gray-100">
                    Add Agent
                </div>
            </a>
    </div>
</div>
@endsection