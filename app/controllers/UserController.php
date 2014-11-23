<?php

class UserController extends BaseController {

    public function prijavaView() {
        return View::make("template/prijava");
    }

    public function prijavaData() {
        $remember = (Input::has("remember")) ? true : false;
        $auth = Auth::attempt(array(
                    'index' => Input::get('index'),
                    'password' => Input::get('password')
                        ), $remember);

        if ($auth) {
            // Uspesno se prijavio
            if (Auth::user()->level == 1){
                return Redirect::route('pocetna');
            }
        }
        else
            return Redirect::route('prijava')
                            ->with('login-alert-class', 'alert-danger')
                            ->with('login-alert-icon', 'fa fa-times-circle fa-fw fa-lg')
                            ->with('login-alert-title', 'Greška')
                            ->with('login-alert-text', 'Nalog sa unetim korisničkim imenom i lozinkom ne postoji, pokušajte ponovo.');
    }
    
    public function odjava(){
        if(Auth::check()){
            Auth::logout();
        }
        return Redirect::route('pocetna');
    }
}
