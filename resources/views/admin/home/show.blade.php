@extends('layouts.app')
@section('content') 

<div class="container w-50">
    <div class="card border">
        <div class="card-header">
            <div class="row justify-content-center">
                <div class="col">
                    <div class="display-4">${{number_format($home->price)}}</div>
                    <div class="h4">{{$home->address}}, {{$home->city}}, {{$home->province}}, {{$home->postal_code}}</div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <h4 class="font-weight-light">{{ ucwords($home->type) }}</h4>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h4 class="font-weight-light">Bedrooms: {{$home->bedrooms}} Bathrooms: {{$home->bathrooms}}</h4>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col">
                    <h4>Property Information:</h4>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p>{{ $home->description }}</p>
                </div>
            </div>
        </div>
        <div class="card-footer">
            @if(Auth::user()->is_admin)
                <form action="/admin/home/{{ $home->id }}/delete" method="post">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="float-right btn btn-sm btn-outline-danger m-2">Delete</button>
                </form>
                <form action="/admin/home/{{ $home->id }}/edit" method="get">
                    @csrf
                    <button type="submit" class="float-right btn btn-sm btn-outline-secondary m-2">Edit</button>
                </form>
            @endif
        </div>
    </div>
</div>

@endsection