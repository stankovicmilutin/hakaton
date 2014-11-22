<?php 

class Student_ispit extends Eloquent{
    
    protected $table = 'student_ispit';
    protected $primaryKey = "ID";
    
    public function student(){
        return $this->belongsTo("Student", "studentID");
    }
    
    public function predmet(){
        return $this->belongsTo("Predmet", "predmetID");
    }
}