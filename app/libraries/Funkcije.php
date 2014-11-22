<?php

class Funkcije{
    
    public static function phpDatum($datum){
        return date("d.m.Y.",strtotime($datum));
    }
    
    public static function sqlDatum($datum){
        return date("Y-m-d",strtotime($datum));
    }
    
    public static function phpDateTime($dateTime){
        return date("h:i - d.m.Y.",strtotime($dateTime));        
    }
}