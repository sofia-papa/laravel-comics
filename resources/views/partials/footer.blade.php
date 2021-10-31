<footer>
    <div class="colums container">
        <div class="footer-nav-wrapper">
            <h4>DC COMICS</h4>
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
            <h4>DC</h4>
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
            <h4>SITES</h4>
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
    </div>


    @dump($sites_comics);
     
</footer>