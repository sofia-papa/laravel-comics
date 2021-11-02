<footer>
    <div class="colums container">
        <div class="footer-nav-wrapper">
            <h3>DC COMICS</h3>
               <nav>
                   <ul>
                       @foreach ($dc_comics as $dc_comic)
                       <li>
                           <a href="#">{{$dc_comic['titolo']}}</a>
                       </li>
                           
                       @endforeach
                   </ul>
                </nav>
        </div>
        <div class="footer-nav-wrapper">
            <h3>DC</h3>
                <nav>
                    <ul>
                        @foreach ($dc_only as $dc_ol)
                        <li>
                            <a href="#">{{$dc_ol['titolo']}}</a>
                        </li>
                            
                        @endforeach
                    </ul>
                </nav>
        </div>

        <div class="footer-nav-wrapper">
            <h3>SITES</h3>
                <nav>
                    <ul>
                        @foreach ($sites_comics as $sites)
                        <li>
                            <a href="#">{{$sites['titolo']}}</a>
                        </li>
                            
                        @endforeach
                    </ul>
                </nav>
        </div>
        <img class="dc_logo" src="{{ asset('images/dc-logo-bg.png')}}" alt="">
    </div> 

    <div class="sign-up-follow">
        <div class="sign-up-button">
            <h4>SIGN-UP NOW!</h4>
        </div>

        <div class="follow-us">
            <h4>FOLLOW US</h4>
            
        </div>
    </div>
</footer>