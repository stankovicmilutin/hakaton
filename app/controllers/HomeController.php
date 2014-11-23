<?php

class HomeController extends BaseController {

    public function pocetna(){
	return View::make('pages/index');
    }
    
    public function ne_ispiti(){
        $ispiti = Student_ispit::where("studentID","=", Auth::user()->ID)
                            ->whereNull("ocena")
                            ->get();
        
        return View::make('pages/ispiti', array( "ispiti" => $ispiti, "title" => "nepoloženi"));
    }
    
    public function po_ispiti(){
        $ispiti = Student_ispit::where("studentID","=", Auth::user()->ID)
                            ->whereNotNull("ocena")
                            ->get();
        
        return View::make('pages/ispiti', array( "ispiti" => $ispiti, "title" => "položeni"));
    }
    
    public function finansije(){
        return View::make('pages/index');
    }
    
    public function skolarina(){
        $rate = Racun::where("opis","=","školarina")->get();
        return View::make('pages/skolarina', array( "rate" => $rate ));
    }
    
    public function dokumenta(){
        return View::make('pages/index');
    }
    
    public function pregled(){
        return View::make('pages/index');
    }
    
    public function kalendar(){
        return View::make('pages/kalendar');
    }

}
