@extends('template/master')


@section('content')
    
    @foreach($ispiti as $ispit)
    
    <div class="btn-1">
        <span></span>
        @if( $title == "položeni")
        <h6>{{ Funkcije::phpDatum($ispit->predmet->sledece_polaganje()["datum"]) }}</h6>
        @endif
        <h6 class="naziv-predmeta">{{ $ispit->predmet->naziv }}</h6>
        <h6 class="txt-right">{{ $ispit->predmet->tip }}</h6>
        <h6 class="txt-right ">{{ $ispit->predmet->espb }}</h6>
        @if( $title == "položeni")
        <h6 class="txt-right preostalo">{{ $ispit->predmet->studPred()->ocena }} </h6>
        @else
        <h6 class="txt-right preostalo prijavi-dugme">PRIJAVI</h6>
        @endif
        <div><span></span></div>
    </div>
    @endforeach
@stop
@section("extra-js")
<script>var ajaxIspitUrl = '{{ URL::Route("ajax-ispit"); }}';</script>
 @stop