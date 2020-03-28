<?php

function get_id_binary_search($arr = null, $id){

    if($arr == null){
        $initarray = file_get_contents("contacts.json");
        $arr = json_decode($initarray, true);
        $arrdatakey = array_keys($arr);
        $lastkey = array_key_last($arrdatakey);
    }
    // check for empty array 
    if (count($arr) === 0) return false; 
    $low = 0; 
    $high = $arrdatakey[$lastkey]; 
      
    while ($low <= $high) { 
          
        // compute middle index 
        $mid = floor(($low + $high) / 2);
        $mid = (int) $mid; 
        if (array_key_exists($mid, $arr)) {
            // element found at mid 
            if($arr[$mid]["id"] == $id) { 
                return $arr[$mid]; 
            } 
        }
        if (array_key_exists($mid, $arr) AND $id < $arr[$mid]["id"]) { 
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
        $mid = (int) $mid;

        if (array_key_exists($mid, $array)) {
            // element found at mid 
            if($array[$mid]["id"] == $x) { 
                $array[$mid] = $addarray; 
            } 
        }
        if (array_key_exists($mid, $array) AND $x < $array[$mid]["id"]) { 
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

function deletearr($array = null, $x) {
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
        $mid = (int) $mid;
        if (array_key_exists($mid, $array)) {
            // element found at mid 
            if($array[$mid]["id"] == $x) {
                unset($array[$mid]);
            }
        }
        if (array_key_exists($mid, $array) AND $x < $array[$mid]["id"]) { 
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

if (! function_exists("array_key_last")) {
        function array_key_last($array) {
            if (!is_array($array) || empty($array)) {
                return NULL;
            }
           
            return array_keys($array)[count($array)-1];
        }
    }