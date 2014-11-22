<?php 

class Uplata extends Eloquent{
    
    protected $table = 'uplate';
    protected $primaryKey = "ID";
    
    public function student(){
        return $this->belongsTo("Student", "studentID");
    }
    
}