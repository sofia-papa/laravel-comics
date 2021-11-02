@extends('layouts.main');

@section('title', 'Action Comics')

@section('contenuto')
     <div id="single-serie" class="container">
        <div class="left-zone">
           <h2>{{$series['title']}}</h2>
           <div>
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
               <h5>Art by:</h5>
               <p></p>
               <h5>Written by:</h5>
               <p> </p>
        </div>
        <div class="Specs">
          <h3>Specs</h3>
               <h5>Series: {{$series['series']}}</h5>
               <h5>U.S. Price: {{$series['price']}}</h5>
               <h5>On Sale Date: {{$series['sale_date']}}</h5>
        </div>
     </div>
     @dump($series)
@endsection

@section('cdn-import')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
@endsection