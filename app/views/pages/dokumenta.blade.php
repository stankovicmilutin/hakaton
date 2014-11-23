@extends('template/master')

@section('page-title')
Dokumenta
@stop

@section('content')
<div class="thead s"><h2>Dokumentacija u elektronskom obliku</h2><h6 class="txt-right"></h6><h6 class="txt-right">Iznos</h6></div>
<div class="btn-1 s">
    <span class="icon-paperclip2"></span>
    <h6>Za Izdavanje dokumenata na revers</h6>
    <h6 class="txt-right"></h6>
    <h6 class="txt-right iznos">800.00</h6>
    <a href="#" class="paybtn">zahtev</a>
</div>
<div class="btn-1 s">
    <span class="icon-paperclip2"></span>
    <h6>Obrazac prijave teme seminarskog rada</h6>
    <h6 class="txt-right"></h6>
    <h6 class="txt-right iznos">0.00</h6>
    <a href="#" class="paybtn">preuzmi</a>
</div>
<div class="btn-1 s">
    <span class="icon-paperclip2"></span>
    <h6>Postupak prijave i odbrane završnog rada</h6>
    <h6 class="txt-right"></h6>
    <h6 class="txt-right iznos">1000.00</h6>
    <a href="#" class="paybtn">zahtev</a>
</div>
<div class="btn-1 s">
    <span class="icon-paperclip2"></span>
    <h6>Obrazac zahteva za ispis sa fakulteta</h6>
    <h6 class="txt-right"></h6>
    <h6 class="txt-right iznos">3000.00</h6>
    <a href="#" class="paybtn">zahtev</a>
</div>
<div class="btn-1 s">
    <span class="icon-paperclip2"></span>
    <h6>Potvrda o statusu studenta</h6>
    <h6 class="txt-right"></h6>
    <h6 class="txt-right iznos">500.00</h6>
    <a href="#" class="paybtn">preuzmi</a>
</div>

@stop



@section("extra-js")
<script>var ajaxIspitUrl = '{{ URL::Route("ajax-ispit"); }}';</script>
@stop