@extends('layouts.home')

@section('content')
<div class="container">
    <div class="row pt-5">
        @foreach ($comics as $comic)
            <div class="col-12 col-md-6 col-lg-2">
                <div class="card mt-3 bg-gray height">
                    <p class="text-primary text-center"> {{$comic->title}}</p>
                    <p class="text-center"> autore.  {{$comic->author}}</p>
                       <p class="text-center"> {{$comic->publisher}}</p>
                       <p class="text-center"> {{$comic->release_date}}</p>
                       <p class="text-center"> {{$comic->description}}</p>
                       <p class="text-center"> {{$comic->price}} &euro;</p>
                </div>
                <div class="card-body">
                    <div class="text-white">
                       
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection