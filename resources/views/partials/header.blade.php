<header>
    <figure>
        <img class="jumbo-bg" src="{{ asset('images/dc-logo.png')}}" alt="">
    </figure>

    <ul>
        @foreach ($header_links as $link)
              <li><a class="{{request()->routeIs($link['route']) ? 'active' : ''}}" 
                  href="{{route($link['route'])}}">{{$link['text']}}</a></li>
        @endforeach
    </ul>
</header>
<div class="jumbo">
    {{-- <img src="{{ asset('images/jumbotron.jpg')}}" alt=""> --}}
    <img class="jumbotron" src="{{ asset('images/jumbotron.jpg')}}" alt="">
</div>