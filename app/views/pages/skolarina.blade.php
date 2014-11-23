@extends('template/master')


@section('content')
<div class="thead s">
        <h2>Školarina </h2>
        <h6 class="txt-right">Rok za plaćanje</h6>
        <h6 class="txt-right preostalo">Iznos</h6>
        <h6 class="txt-right"></h6>
 </div>
@foreach($rate as $rata)

    <div class="btn-1 active"><span></span>
        <h6 class="txt-right">{{ Funkcije::phpDatum($rata->rok) }}</h6>
        <h6 class="txt-right preostalo">{{ $rata->iznos }} RSD</h6>
        <h6 class="txt-right preostalo">PLATI</h6>
        <div><span></span></div>
    </div>

@endforeach
@stop