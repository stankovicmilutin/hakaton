@extends('template/master')


@section('content')
<div class="widget one">
    <h3>Ukupno dugovanje</h3><h3><span>28</span>dana</h3>
</div>
<div class="widget sec">
    <h3>Do ispitnog roka preostalo je još</h3><h3><span>28</span>dana</h3>
</div>
<div class="widget thrd">
    <h3>Ukupno dugovanje</h3><h3><span>14.000</span>RSD</h3>
</div>
<div class="clearfix"></div>
<div class="thead">
    <h2>Podsetnik obaveza </h2>
    <h6 class="txt-right">Datum</h6>
    <h6 class="txt-right preostalo">Preostalo</h6>
    <h6 class="txt-right">Detalji</h6>
</div>
<?php
$count = count($data);
if ($count > 5)
    $count = 5;

    $now = time(); 

?>
@for($i = 0; $i<$count; $i++)
@if($i==0)
<div class="btn-1 active">
    @else
    <div class="btn-1">
        @endif
        @if( $data[$i] instanceof Racun )
            <span></span>
            <h6>Školarina</h6>
            <h6>Uplata rate za školarinu</h6>
            <h6 class="txt-right">{{ date("d. F Y.",strtotime( $data[$i]->s_date)) }}</h6>
            <?php
                $your_date = strtotime($data[$i]->s_date);
                $datediff = $your_date - $now;
            ?>
            <h6 class="txt-right preostalo">još {{floor( $datediff/(60*60*24)) }} dana</h6>
            <div><span></span></div>
        @endif
        @if( $data[$i] instanceof Rok )
            <span></span>
            <h6>Ispitni rok</h6>
            <h6>Početak prijave za {{  }}</h6>
            <h6 class="txt-right">{{ date("d. F Y.",strtotime( $data[$i]->s_date)) }}</h6>
            <?php
                $your_date = strtotime($data[$i]->s_date);
                $datediff = $your_date - $now;
            ?>
            <h6 class="txt-right preostalo">još {{floor( $datediff/(60*60*24)) }} dana</h6>
            <div><span></span></div>
        @endif
        @if( $data[$i] instanceof RasporedIspita )
            <span></span>
            <h6>Predstojeći ispit</h6>
            <h6>{{ $data[$i]->predmet }}</h6>
            <h6 class="txt-right">{{ date("d. F Y.",strtotime( $data[$i]->s_date)) }}</h6>
            <?php
                $your_date = strtotime($data[$i]->s_date);
                $datediff = $your_date - $now;
            ?>
            <h6 class="txt-right preostalo">još {{floor( $datediff/(60*60*24)) }} dana</h6>
            <div><span></span></div>
        @endif
    </div>
    @endfor

    <div class="line"></div>
    <div class="clearfix"></div>
    <section class="news">
        <div class="date">
            <div class="day">18</div>
            <div class="mnth">NOV</div>
        </div>
        <section class="artcl">
            <h4 class="lrg">dreamspark program</h4>
            <p>Nakon višenedeljne komunikacije sa kompanijom koja realizuje Microsoftov DreamSPark program otklonjeni su problemi koji su Vas sprečavali da preuzmete besplatan softver. Svi nalozi su migrirani u novu prodavnicu, tebi sada trebalo da ste već dobili obaveštenje od kivuto.com putem email-a. </p>
            <p>Izvinjavamo se zbog problema koje ste imali, ali definitivno nije bio problem kod nas. </p>
        </section>
    </section>
    <section class="news">
        <div class="date">
            <div class="day">13</div>
            <div class="mnth">NOV</div>
        </div>
        <section class="artcl">
            <h4 class="lrg">dreamspark program</h4>
            <p>Nakon višenedeljne komunikacije sa kompanijom koja realizuje Microsoftov DreamSPark program otklonjeni su problemi koji su Vas sprečavali da preuzmete besplatan softver. Svi nalozi su migrirani u novu prodavnicu, tebi sada trebalo da ste već dobili obaveštenje od kivuto.com putem email-a. </p>
            <p>Izvinjavamo se zbog problema koje ste imali, ali definitivno nije bio problem kod nas. </p>
        </section>
        <div class="clearfix"></div>
    </section>
    @stop