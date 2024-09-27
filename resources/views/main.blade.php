
@extends('layouts.home')


@section('content')
<div class="jumbotron" style="background-image: url('{{ Vite::asset('resources/img/jumbotron.jpg') }}');">
    <span class="badge text-bg-primary rounded-0 px-4 py-2">
        <h3>CURRENT SERIES</h3>
    </span>
</div>
<div class="bg-dark">
<div class="container">
    <div class="row pt-5">
        @foreach ($movies as $movie)
            <div class="col-12 col-md-6 col-lg-2">
                <div class="card mt-3">
                    <img class="img-fluid" src="{{($movie['thumb'])}}" alt="{{$movie['title']}}">
                </div>
                <div class="card-body">
                    <div class="card-title text-white">
                       <p> {{$movie['title']}}</p>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="text-center py-2">
            <button class="btn btn-primary rounded-0 px-5">LOAD MORE</button>
        </div>
    </div>
</div>
</div>
<div class="bg-primary">
<div class="container">
   <div class="row">
       <div class="col-12 p-5 text-center image z-index">
           <img src= "{{Vite::asset('resources/img/buy-comics-digital-comics.png')}}"/>
           <span class="text-white"> digital comics</span>
           <img src="{{Vite::asset('resources/img/buy-comics-merchandise.png')}}" />
           <span class="text-white"> dc merchandise</span>
           <img src="{{Vite::asset('resources/img/buy-comics-subscriptions.png')}}" />
           <span class="text-white"> subscription</span>
           <img src="{{Vite::asset('resources/img/buy-comics-shop-locator.png')}}" />
           <span class="text-white"> comic shop locator</span>
           <img src="{{Vite::asset('resources/img/buy-dc-power-visa.svg')}}" />
           <span class="text-white"> dc power visa</span>
       </div>
   </div>
</div>
</div>
@endsection