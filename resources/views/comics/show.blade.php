@extends('layouts.home')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4 p-3">
                    <h1 class="text-center text-primary">{{$comic->title}}</h1>
                <p class="text-center"> {{$comic->description}}</p>
                </div>
                
            </div>
        </div>
    </div>
@endsection