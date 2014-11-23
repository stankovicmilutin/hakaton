<ul>
    <li><a href="{{ URL::route('pocetna') }}"><img src ="img/logo.svg" alt="logo"/></a></li>
    <li>
        <a href="{{ URL::route('pocetna') }}"><span class=""></span><span class="item">Naslovna</span></a>
    </li>
    <li>
        <a class="isp-trig" href="{{ URL::route('ne_ispiti') }}"><span class="icon-pen3"></span><span class="item">ispiti</span></a>
        <ul class="drop-down ispiti-menu">
            <li>
                <a href="{{ URL::route('ne_ispiti') }}"><span></span><span class="item">Nepoloženi ispiti</span></a>
            </li>
            <li>
                <a href="{{ URL::route("po_ispiti") }}"><span></span><span class="item">Položeni ispiti</span></a>
            </li>
        </ul>
    </li>
    <li>
        <a class="fin-trig" href="{{ URL::route('finansije') }}"><span class="icon-banknote"></span><span class="item">finansije</span></a>
        <ul class="drop-down finansije-menu">
            <li>
                <a href="{{ URL::route('finansije') }}"><span></span><span class="item">Istorija</span></a>
            </li>
        @if( Auth::user()->finansiranje == "SAM")
            <li>
                <a href="{{ URL::route('skolarina') }}"><span></span><span class="item">Školarina</span></a>
            </li>
        @endif
        </ul>
    </li>
    <li>
        <a href="{{ URL::route('dokumenta') }}"><span class="icon-paperclip2"></span><span class="item">dokumenta</span></a>
    </li>
    <li>
        <a href="{{ URL::route('kalendar') }}"><span class="icon-small58"></span><span class="item">kalendar</span></a>
    </li>
</ul>
