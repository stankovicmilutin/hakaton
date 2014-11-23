<ul>
    <li><a href="{{ URL::route('pocetna') }}"></a></li>
    <li>
        <a href="{{ URL::route('pocetna') }}"><span class=""></span><span class="item">početna</span></a>
    </li>
    <li>
        <a href="{{ URL::route('ispiti') }}"><span class="icon-pen3"></span><span class="item">ispiti</span></a>
    </li>
    <li>
        <a href="{{ URL::route('finansije') }}"><span class="icon-banknote"></span><span class="item">finansije</span></a>
        <ul class="drop-down">
            <li>
                <a href="#"><span class="icon-pen3"></span><span class="item">page#1</span></a>
            </li>
            <li class="active">
                <a href="#"><span class="icon-pen3"></span><span class="item">page#1</span></a>
            </li>
        </ul>
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