@extends('layouts.app')
@section('content') 

<div class="container w-50">
    <div class="card">
        <div class="card-header">
            <div class="row justify-content-center">
                <div class="col">
                    <div class="display-4">${{number_format($home->price)}}</div>
                    <div class="h4">{{$home->address}}, {{$home->city}}, {{$home->province}}, {{$home->postal_code}}</div>
                </div>
                <div class="col-5">
                    <div class="h4 float-right">Bathrooms: {{$home->bathrooms}}<br>Bedrooms: {{$home->bedrooms}}</div>
                </div>
            </div>
        </div>
        <div class="card-body m-3">
            <div class="row">
                <div class="h1">About This Property:</div>
            </div>
            <div class="row">
                <div class="h4">Write something interesting about this property</div>
            </div>
        </div>
        <div class="card-footer">
            @if(Auth::user()->is_admin)
                <form action="/home/list/{{ $home->id }}/delete" method="post">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="float-right btn btn-sm btn-outline-danger">Delete Home</button>
                </form>
            @endif
        </div>
    </div>
</div>

@endsection