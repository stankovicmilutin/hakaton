@extends('template/master')


@section('content')
    @foreach($rate as $rata)
    
    <div class="btn-1">
        <span></span>
        <h6>{{ Funkcije::phpDatum($rata->rok) }}</h6>
        <h6>Rata za školarinu</h6>
        <h6 class="txt-right">{{ $rata->iznos }} RSD</h6>
        <h6 class="txt-right preostalo">PLATI</h6>
        <div><span></span></div>
    </div>
    @endforeach
@stop