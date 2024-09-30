@extends('layouts.home')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">DC Comics: Aggiungi nuovo fumetto</h1>
            </div>
            <div class="col-12 mb-5">
                <form action="{{route('comics.store')}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-6">
                        <label for="" class="ccontrol-label">titolo</label>
                        <input type="text" class="form-control" name="title" placeholder="titolo">
                    </div>
                    <div class="col-6">
                        <label for="" class="ccontrol-label">autore</label>
                        <input type="text" class="form-control" name="author" placeholder="autore">
                    </div>
                    <div class="col-6">
                        <label for="" class="ccontrol-label">pubblicazione</label>
                        <input type="text" class="form-control" name="publisher" placeholder="pubblicazione">
                    </div>
                    <div class="col-6">
                        <label for="" class="ccontrol-label">data di rilascio</label>
                        <input type="text" class="form-control" name="release_date" placeholder="data di rilascio">
                    </div>
                    <div class="col-6">
                        <label for="" class="ccontrol-label">prezzo</label>
                        <input type="text" class="form-control" name="price" placeholder="prezzo">
                    </div>
                    <div class="col-12">
                        <label for="" class="ccontrol-label">descrizione</label>
                        <textarea type="text" class="form-control" name="description" placeholder="descrizione"></textarea>
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