@extends('layouts.app')

@section('content')
<div class="container">
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