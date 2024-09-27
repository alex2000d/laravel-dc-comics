@extends('layouts.home')

@section('content')
<div class="container">
    <div class="row pt-5">
        @foreach ($comics as $comic)
            <div class="col-12 col-md-6 col-lg-2">
                <div class="card mt-3 bg-gray height my-3">
                    <p class="text-primary text-center"> {{$comic->title}}</p>
                    <p class="text-center"> autore.  {{$comic->author}}</p>
                       <p class="text-center"> {{$comic->publisher}}</p>
                       <p class="text-center"> {{$comic->release_date}}</p>
                       <p class="text-center"> {{$comic->price}} &euro;</p>
                       <a href="{{route('comics.show', ['comic' => $comic->id] )}}"class="btn btn-sm btn-square btn-primary rounded-2"> scopri di più</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection