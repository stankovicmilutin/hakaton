<?php

class RasporedIspita extends Eloquent {
    protected $table = "raspored_ispita";
    protected $primaryKey = "ID";
    
    public function predmet(){
        return $this->hasOne("Predmet","ID");
    }
}