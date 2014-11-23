@extends('template/master')

@section('page-title')
Ispiti
@stop

@section('content')
    <div class="thead s"><h2>Ispiti</h2><h6 class="txt-right"></h6><h6 class="txt-right" id="tip">Tip</h6></div>
    @foreach($ispiti as $ispit)
    
    <div class="btn-1">
        <span class="icon-pen3"></span>
        @if( $title == "položeni")
        <h6>{{ Funkcije::phpDatum($ispit->predmet->sledece_polaganje()["datum"]) }}</h6>
        @endif
        <h6 class="naziv-predmeta">{{ $ispit->predmet->naziv }}</h6>
        <h6 class="txt-right left-margin">{{ $ispit->predmet->tip }}</h6>
        <h6 class="txt-right ">{{ $ispit->predmet->espb }}</h6>
        @if( $title == "položeni")
        <h6 class="txt-right preostalo">{{ $ispit->predmet->studPred()->ocena }} </h6>
        @else
        <h6 class="txt-right preostalo prijavi-dugme paybtn" id="{{ $ispit->ID }}">PRIJAVI</h6>
        @endif
    </div>
    @endforeach
@stop
@section("extra-js")
<script>var ajaxIspitUrl = '{{ URL::Route("ajax-ispit"); }}';</script>
 @stop