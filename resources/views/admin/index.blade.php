@extends('layouts.app')

@section('content')

<div class="container" id="status">
    <div class="row justify-content-center">
        <div class="card">
            @if(session('success'))
                <div class="card-header text-success">{{ session('success') }}</div>
            @endif
            @if(session('error'))
                <div class="card-header text-danger">{{ session('error') }}</div>
            @endif
        </div>
    </div>
</div>

<div class="container pt-2">
    <div class="row justify-content-center">
        <div class="card">
            <div class="card-header">What Would You Like to Do?</div>
            <div class="card-body">
                <div class="list-group">
                    <a href="/admin/create" class="list-group-item list-group-item-action">Add Home</a>
                    <a href="#" class="list-group-item list-group-item-action">Edit Home</a>
                    <a href="#" class="list-group-item list-group-item-action">View Home</a>
                    <a href="#" class="list-group-item list-group-item-action">Delete Home</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection