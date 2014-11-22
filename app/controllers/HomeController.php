<?php

class HomeController extends BaseController {

    public function pocetna(){
	return View::make('pages/index');
    }
    
    public function ispiti(){
        return View::make('pages/index');
    }
    
    public function finansije(){
        return View::make('pages/index');
    }
    
    public function dokumenta(){
        return View::make('pages/index');
    }
    
    public function pregled(){
        return View::make('pages/index');
    }
    
    public function kalendar(){
        return View::make('pages/index');
    }

}
