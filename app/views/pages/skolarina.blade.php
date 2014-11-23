@extends('template/master')

@section('page-title')
Finansije
@stop

@section('content')
<div class="thead s">
        <h2>Školarina </h2>
        <h6 class="txt-right">Rok za plaćanje</h6>
        <h6 class="txt-right preostalo">Iznos</h6>
        <h6 class="txt-right"></h6>
 </div>
@foreach($rate as $rata)
    <div class="btn-1 s active">
        <span class="icon-skolarina"></span>
        <h6>{{ $rata->opis }}</h6>
        <h6 class="txt-right">{{ Funkcije::phpDatum($rata->rok) }}</h6>
        <h6 class="txt-right iznos">{{ $rata->iznos }} RSD</h6>
        <a href="#" class="paybtn">plati</a>
    </div>

@endforeach
@stop