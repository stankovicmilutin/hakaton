<?php 

class Predmet extends Eloquent{
    
    protected $table = 'predmeti';
    protected $primaryKey = "ID";
    
    
    public function sledece_polaganje(){
       return RasporedIspita::where("predmetID","=",$this->ID)->orderBy('ID',"DESC")->first();
    }
    
    public function studPred(){
        return StudentIspit::where("predmetID","=",$this->ID)
                            ->where("studentID","=",Auth::user()->ID)
                            ->first();
    }
}