<?php 

class Prijava extends Eloquent{
    
    protected $table = 'prijave';
    protected $primaryKey = "ID";
    
    public function student(){
        return $this->belongsTo("Student", "studentID");
    }
}