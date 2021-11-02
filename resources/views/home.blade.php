@extends('layouts.main');

@section('title', 'Home')

@section('contenuto')
       <div id="products">
           <div class="main-container"> 
               <div class="films">
                  @foreach ($films as $film) 
                  

                    <div class="card serie-box">
                      {{-- <a href='{{url("/serie/$loop->index")}}'> --}}
                        <a href="{{ route('serie', ['id' => $loop->index])}}">
                        <img src="{{$film['thumb']}}" alt="">
                        <h3>{{$film['series']}}</h3>
                      </a>
                    </div> 
        
                  
                  @endforeach
                  
             </div>
            </div>
       </div>
    
@endsection
