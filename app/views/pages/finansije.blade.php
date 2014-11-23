@extends('template/master')

@section('page-title')
Finansije
@stop

@section('content')
<div class="thead s finansije-strana">
        <h2>Istorija transakcija </h2>
        <h6 class="txt-right">Broj fakture</h6>
        <h6 class="txt-right preostalo">Svrha uplate</h6>
        <h6 class="txt-right">Iznos</h6>
 </div>
    @foreach($uplate as $uplata)
    
    <div class="btn-1">
        <span></span>
        <h6>{{ Funkcije::phpDatum( $uplata->created_at ) }}</h6>
        <h6 class="naziv-predmeta"><a href="#" class="invoice">ELFAK151000{{ $uplata->ID }}</a></h6>
        <h6>{{ $uplata->svrha }}</h6>
        <h6>{{ $uplata->iznos }}</h6>
        <div><span></span></div>
    </div>
    @endforeach
@stop
@section("extra-js")

 @stop