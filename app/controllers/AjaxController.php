<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AjaxController
 *
 * @author LIMIT
 */
class AjaxController extends BaseController {
    
    function proveriDatumIspita() {
        $danas = new DateTime("today");
        $ispitniRok = Rok::where("pocetak_prijave", ">=", $danas)->orderBy("pocetak_prijave", "asc")->first();
        
        $suma = 0;
        if ($danas <= $ispitniRok->pocetak_prijave || $danas >= $ispitniRok->kraj_prijave)
            $suma += 1200;
        
        if ($ispitniRok->tip == "vanredni")
            $suma += 1200;
        
        return $suma;
    }
}
