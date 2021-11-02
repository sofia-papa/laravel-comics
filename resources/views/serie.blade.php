@extends('layouts.main');

@section('title', $series['title'])

@section('contenuto')
     <div class="img-serie">
        {{--  {{$series['thumb']}} --}}
     </div>
     <div id="single-serie" class="container">
        <div class="left-zone">
           <h2>{{$series['title']}}</h2>
           <div class="available">
              <p>U.S. Price: {{$series['price']}}</p>
              <p>Check Availability</p>
          </div>
            <p>{{$series['description']}}</p>
        </div>

        <figure class="right-zone">
             <img src="{{ asset('images/adv.jpg')}}" alt="">
        </figure>
     </div>
     <div class="second-wrapper">
        <div class="talent">
          <h3>Talent</h3>
          <div>
               <h5>Art by:</h5>
               @foreach ($series['artists'] as $artist)
                   <li class="artist-writers">{{$artist}}</li>
               @endforeach

               <h5>Written by:</h5>
               @foreach ($series['writers'] as $writer)
                   <li class="artist-writers">{{$writer}}</li>
               @endforeach
        </div>
     </div>
        <div class="Specs">
          <h3>Specs</h3>
          <div>
               <h5>Series: </h5> {{$series['series']}}
               <h5>U.S. Price: </h5> {{$series['price']}}
               <h5>On Sale Date: </h5>  {{$series['sale_date']}}
          </div>
        </div>
     </div>
@endsection

@section('cdn-import')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
@endsection