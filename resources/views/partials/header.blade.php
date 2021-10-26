<header>
    <figure>
        <img src="{{ asset('images/dc-logo.png')}}" alt="">
    </figure>

    <ul>
        @foreach ($header_links as $link)
              <li><a class="{{request()->routeIs($link['route']) ? 'active' : ''}}" 
                  href="{{route($link['route'])}}">{{$link['text']}}</a></li>
        @endforeach
    </ul>

    <div class="jumbo">
        {{-- <img src="{{ asset('images/jumbotron.jpg')}}" alt=""> --}}
    </div>


</header>