<ul>
    <li><a href="{{ URL::route('pocetna') }}"></a></li>
    <li>
        <a href="{{ URL::route('pocetna') }}"><span class=""></span><span class="item">početna</span></a>
    </li>
    <li>
        <a href="{{ URL::route('ne_ispiti') }}"><span class="icon-pen3"></span><span class="item">ispiti</span></a>
        <ul class="drop-down">
            <li>
                <a href="{{ URL::route('ne_ispiti') }}"><span></span><span class="item">NEPOLOŽENI ISPITI</span></a>
            </li>
            <li>
                <a href="{{ URL::route("po_ispiti") }}"><span></span><span class="item">POLOŽENI ISPITI</span></a>
            </li>
        </ul>
    </li>
    <li>
        <a href="{{ URL::route('finansije') }}"><span class="icon-banknote"></span><span class="item">finansije</span></a>
        @if( Auth::user()->finansiranje == "SAM")
        <ul class="drop-down">
            <li>
                <a href="{{ URL::route('skolarina') }}"><span></span><span class="item">ŠKOLARINA</span></a>
            </li>
        </ul>
        @endif
    </li>
    <li>
        <a href="{{ URL::route('dokumenta') }}"><span class="icon-paperclip2"></span><span class="item">dokumenta</span></a>
    </li>
    <li>
        <a href="{{ URL::route('pregled') }}"><span class="icon-see"></span><span class="item">pregled</span></a>
    </li>
    <li>
        <a href="{{ URL::route('kalendar') }}"><span class="icon-small58"></span><span class="item">kalendar</span></a>
    </li>
</ul>
