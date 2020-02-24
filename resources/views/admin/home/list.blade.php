@extends('layouts.app')
@section('content')

@include('layouts.search')

<div class="container">
    <div class="row justify-content-center">
        @foreach($homes as $home)
        <div class="col-sm-4">
            <div class="card m-2" id="home{{$home->id}}">
                <a href="/home/{{$home->id}}">
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item border-0 py-0 text-dark h1">${{ $home->price }}</li>
                        <li class="list-group-item border-0 py-0 text-secondary">{{ $home->address }}</li>
                        <li class="list-group-item border-0 py-0 text-secondary">{{ $home->city }}, {{ $home->province }}</li>
                        <li class="list-group-item border-0 py-0 text-secondary">Bedrooms: {{ $home->bedrooms }}</li>
                        <li class="list-group-item border-0 py-0 text-secondary">Bathrooms: {{ $home->bathrooms }}</li>
                    </ul>
                </div>
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection