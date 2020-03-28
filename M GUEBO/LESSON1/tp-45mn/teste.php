<?php
    $initarray = file_get_contents("contacts.json");
    $array = json_decode($initarray, true);
    $arraykey = array_keys($array);
    $x = $arraykey[0];
    echo "$x";
    var_dump($arraykey);   
?>