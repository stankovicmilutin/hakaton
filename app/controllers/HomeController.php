<?php

class HomeController extends BaseController {

    public function pocetna(){
	return View::make('hello');
    }
    
    public function ispiti(){
        return View::make("hello");
    }
    
    public function finansije(){
        return View::make("hello");
    }
    
    public function dokumenta(){
        return View::make("hello");
    }
    
    public function pregled(){
        return View::make("hello");
    }
    
    public function kalendar(){
        return View::make("hello");
    }

}
