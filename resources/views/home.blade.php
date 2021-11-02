@extends('layouts.main');

@section('title', 'Home')

@section('contenuto')
       <div id="products">
           <div class="main-container"> 
             <img class="jumbotron" src="{{ asset('images/jumbotron.jpg')}}" alt="">
               <div class="films">
                  @foreach ($films as $film) 
                  

                    <div class="card serie-box">
                      <a href='{{url("/serie/$loop->index")}}'>
                        <img src="{{$film['thumb']}}" alt="">
                        <h3>{{$film['series']}}</h3>
                      </a>
                    </div> 
        
                  
                  @endforeach
                  
             </div>
            </div>
       </div>
    
@endsection
