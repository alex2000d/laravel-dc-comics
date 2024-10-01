@extends('layouts.home')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">DC Comics: modifica il fumetto</h1>
            </div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="list-unstyled">
                   @foreach ($errors->all() as $error)
                       <li>{{$error}}</li>
                   @endforeach
                </ul>
            </div>
        @endif
            <div class="col-12 mb-5">
                <form action="{{route('comics.update', ['comic' => $comic->id])}}" method="post">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-6">
                        <label for="" class="ccontrol-label">titolo</label>
                        <input type="text" class="form-control" name="title" placeholder="titolo" value="{{ old('title', $comic->title)}}">
                    </div>
                    <div class="col-6">
                        <label for="" class="ccontrol-label">autore</label>
                        <input type="text" class="form-control" name="author" placeholder="autore" value="{{old('author',$comic->author)}}">
                    </div>
                    <div class="col-6">
                        <label for="" class="ccontrol-label">pubblicazione</label>
                        <input type="text" class="form-control" name="publisher" placeholder="pubblicazione" value="{{old('publisher',$comic->publisher)}}">
                    </div>
                    <div class="col-6">
                        <label for="" class="ccontrol-label">data di rilascio</label>
                        <input type="text" class="form-control" name="release_date" placeholder="data di rilascio" value="{{old('release_date',$comic->release_date)}}">
                    </div>
                    <div class="col-6">
                        <label for="" class="ccontrol-label">prezzo</label>
                        <input type="text" class="form-control" name="price" placeholder="prezzo" value="{{old('price', $comic->price)}}">
                    </div>
                    <div class="col-12">
                        <label for="" class="ccontrol-label">descrizione</label>
                        <textarea type="text" class="form-control" name="description" placeholder="descrizione">{{old('description', $comic->description)}}</textarea>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-success rounded-2 mt-3">salva</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection