<?php

function get_id_binary_search($arr = null, $id){

    if($arr == null){
        $initarray = file_get_contents("contacts.json");
        $arr = json_decode($initarray, true);
    }
    // check for empty array 
    if (count($arr) === 0) return false; 
    $low = 0; 
    $high = count($arr) - 1; 
      
    while ($low <= $high) { 
          
        // compute middle index 
        $mid = floor(($low + $high) / 2); 
        
        // element found at mid 
        if($arr[$mid]["id"] == $id) { 
            return $arr[$mid]; 
        } 
  
        if ($id < $arr[$mid]["id"]) { 
            // search the left side of the array 
            $high = $mid -1; 
        } 
        else { 
            // search the right side of the array 
            $low = $mid + 1; 
        } 
    }    
    // If we reach here element id doesnt exist 
    return false; 
}

function updelement($array = null, $x, $addarray) {

    if($array == null){
        $initarray = file_get_contents("contacts.json");
        $array = json_decode($initarray, true);
    }
    // check for empty array 
    if (count($array) === 0) return false; 
    $low = 0; 
    $high = count($array) - 1; 
      
    while ($low <= $high) { 
          
        // compute middle index 
        $mid = floor(($low + $high) / 2); 
        
        // element found at mid 
        if($array[$mid]["id"] == $x) { 
            $array[$mid] = $addarray; 
        } 
  
        if ($x < $array[$mid]["id"]) { 
            // search the left side of the array 
            $high = $mid -1; 
        } 
        else { 
            // search the right side of the array 
            $low = $mid + 1; 
        } 
    } 
    return $array;   
}