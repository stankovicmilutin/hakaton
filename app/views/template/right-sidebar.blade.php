    <h2>Aktivne transakcije </h2>
    <div class="btn-2 clr-red">
        <span></span>
        <h6 class="lrg">Računarsko programiranje</h6>
        <h6 class="small"><span>1200.00</span> dinara</h6>
        <span></span>
    </div>
    <div class="btn-2 clr-blue">
        <span></span>
        <h6 class="lrg">Potvrda o statusu studenta</h6>
        <h6 class="small"><span>500.00</span> dinara</h6>
        <span></span>
    </div>
    <div class="btn-2 clr-grn">
        <span></span>
        <h6 class="lrg">Decembarska rata školarine</h6>
        <h6 class="small"><span>10000.00</span> dinara</h6>
        <span></span>
    </div>
    <div class="sum">
        <h4 class="lrg">Ukupno:</h4>
        <h4 class="lrg"><span>11700.00</span> dinara</h4>
    </div>
    <div class="pay">
        <a target="blank" href="http://uplatnica.rs/uplatnica.php?uplatilac={{ Auth::user()->ime }}%20{{ Auth::user()->prezime }}&svrha=racun:elfak35A1&primalac=Elektronski%20Fakultet%20Nis&sifra=189&valuta=RSD&iznos=2323&iznos_dec=00&racun=160-332233-93&model=&poziv="><h4><span></span>pdf uplatnice</h4></a>
        <a target="blank" href="https://www.paypal.com/rs/cgi-bin/webscr?cmd=_flow&SESSION=ksJ2uT1mirkn5zz0ATNfUTT1T_9VlF7rNa93yIUf_Xm4qdaZSxGrR4hQA-4&dispatch=50a222a57771920b6a3d7b606239e4d529b525e0b7e69bf0224adecfb0124e9b61f737ba21b08198d8562aa8a3da7ac30bbfba73b3e80dcc"><h4>plati</h4></a>
    </div>
