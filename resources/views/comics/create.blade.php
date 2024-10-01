@extends('layouts.home')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">DC Comics: Aggiungi nuovo fumetto</h1>
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
                <form action="{{route('comics.store')}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-6">
                        <label for="" class="ccontrol-label">titolo</label>
                        <input type="text" class="form-control" name="title" placeholder="titolo" value="{{old('title')}}">
                    </div>
                    <div class="col-6">
                        <label for="" class="ccontrol-label">autore</label>
                        <input type="text" class="form-control" name="author" placeholder="autore" value="{{old('author')}}">
                    </div>
                    <div class="col-6">
                        <label for="" class="ccontrol-label">pubblicazione</label>
                        <input type="text" class="form-control" name="publisher" placeholder="pubblicazione" value="{{old('publisher')}}">
                    </div>
                    <div class="col-6">
                        <label for="" class="ccontrol-label">data di rilascio</label>
                        <input type="text" class="form-control" name="release_date" placeholder="data di rilascio" value="{{old('release_date')}}">
                    </div>
                    <div class="col-6">
                        <label for="" class="ccontrol-label">prezzo</label>
                        <input type="text" class="form-control" name="price" placeholder="prezzo" value="{{old('price')}}">
                    </div>
                    <div class="col-12">
                        <label for="" class="ccontrol-label">descrizione</label>
                        <textarea type="text" class="form-control" name="description" placeholder="descrizione">{{old('description')}}</textarea>
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