<?php namespace App\Utils;

use App\State;
use App\Facility;

class Utils {
    
    public static function getComboBoxStates(){
       
            $states = State::all();
            $array = array();
            $array[''] = 'Select State'; 
            
            foreach ($states AS $state) {
                $array[$state->id] = $state->name;
            }
            
            return $array;
    }

    public static function getComboBoxFacilities(){
       
            $facilities = Facility::all();
            $array = array();
            
            foreach ($facilities AS $facility) {
                $array[$facility->id] = $facility->name;
            }
            
            return $array;
    }
   
}