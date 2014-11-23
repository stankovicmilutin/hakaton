<?php

class HomeController extends BaseController {

    public function pocetna(){
        
        $data = array();
        
        if(Auth::user()->finansiranje == "SAM")
            $rate = Racun::where("opis","=","školarina")->sum("iznos");
        else
            $rate = "fib";
        
        $i = 0;
        foreach(Auth::user()->racuni as $racun){
            $data[$i] = $racun;
            if($racun != null){
                $data[$i]->s_date = $racun->rok;
                $i++;
            }
        }
        foreach(Auth::user()->prijavljeniIspiti as $ispit){
            $raspored = RasporedIspita::where("rokID","=",$ispit->rokID)
                                    ->where("predmetID","=",$ispit->predmetID)
                                    ->first();
            
            $data[$i] = $raspored;
            if($raspored != null){
                $data[$i]->s_date = $raspored->datum;
                $i++;
            }
        }
        $ispitniRok = Rok::where("pocetak_prijave", ">=", new DateTime('today') )->orderBy("pocetak_prijave","asc")->first();
        $data[$i] = $ispitniRok;
        $data[$i]->s_date = $ispitniRok->pocetak;
        for($j = 0; $j<$i; $j++){
            $min = $j;
            for($k = $j; $k<$i; $k++){
                if( $data[$min]->s_date > $data[$k]->s_date )
                    $min = $k;
            }
            $temp = $data[$min];
            $data[$min] = $data[$j];
            $data[$j] = $data[$min];            
        }
        
        
	return View::make('pages/index', array("data" => $data, "sledeci_rok" => $ispitniRok, "rate" => $rate ));
    }
    
    public function ne_ispiti(){
        $ispiti = StudentIspit::where("studentID","=", Auth::user()->ID)
                            ->whereNull("ocena")
                            ->get();
        
        return View::make('pages/ispiti', array( "ispiti" => $ispiti, "title" => "nepoloženi"));
    }
    
    public function po_ispiti(){
        $ispiti = StudentIspit::where("studentID","=", Auth::user()->ID)
                            ->whereNotNull("ocena")
                            ->get();
        
        return View::make('pages/ispiti', array( "ispiti" => $ispiti, "title" => "položeni"));
    }
    
    public function finansije(){
        $uplate = Uplata::where("studentID","=",Auth::user()->ID)->get();
        return View::make('pages/finansije', array("uplate" => $uplate ));
    }
    
    public function skolarina(){
        $rate = Racun::where("opis","=","školarina")->get();
        return View::make('pages/skolarina', array( "rate" => $rate ));
    }
    
    public function dokumenta(){
        return View::make('pages/dokumenta');
    }
    
    public function pregled(){
        return View::make('pages/index');
    }
    
    public function kalendar(){
        return View::make('pages/kalendar');
    }

}
