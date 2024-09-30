@extends('layouts.home')

@section('content')
<div class="container">
    <div class="row mt-2">
        <div class="col-10">
            <h1> I nostri fumetti</h1> 
        </div>
        <div class="col-2">
            <a href="{{route('comics.create')}}" class="btn btn-sm btn-primary rounded-2">aggiungi fumetti</a>
        </div>
    </div>
    <div class="row pt-5">
        @foreach ($comics as $comic)
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card mt-3 bg-gray height my-3">
                    <p class="text-primary text-center"> {{$comic->title}}</p>
                    <p class="text-center"> autore.  {{$comic->author}}</p>
                       <p class="text-center"> {{$comic->publisher}}</p>
                       <p class="text-center"> {{$comic->release_date}}</p>
                       <p class="text-center"> {{$comic->price}} &euro;</p>
                       <div class="row">
                        <div class=" col-12 col-lg-4">
                            <a href="{{route('comics.show', ['comic' => $comic->id] )}}"class="btn  btn-sm btn-square btn-primary rounded-2 ms-3">altro</a>
                        </div>
                        <div class=" col-12 col-lg-4">
                            <a href="{{route('comics.edit', ['comic' => $comic->id] )}}"class="btn btn-sm btn-square btn-warning rounded-2"> modifica</a>
                        </div>
                        <div class=" col-12 col-lg-4">
                            <form action="{{route('comics.destroy', ['comic' => $comic->id])}}" method="post">
                                @csrf
                                @method('DELETE')
                            <button type="submit" onclick="return confirm('sei sicuro? il mondo potrebbe collassare, fai la scelta giusta soldato.')" class="btn btn-sm btn-square btn-danger rounded-2"> cancella</button>
                            </form>
                        </div>
                       </div>
                       
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection