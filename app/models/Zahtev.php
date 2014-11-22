<?php 

class Zahtev extends Eloquent{
    
    protected $table = 'zahtevi';
    protected $primaryKey = "ID";
    
    
    public function student(){
        return $this->belongsTo("Student", "studentID");
    }
}