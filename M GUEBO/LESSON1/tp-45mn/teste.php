<?php
	$letterGroups = array();
	$oldContact = file_get_contents("contacts.json"); //Get the information in already in contact.json
	$people = json_decode($oldContact, true);         //Decode the json format in object php format
	for ($i=0; $i< count($people); $i++){
	    $firstLetter = ucfirst(substr ($people[$i]["nom"], 0 , 1));
	    $letterGroups[$firstLetter][] = $people[$i]; 
	}
	ksort($letterGroups);
	//var_dump($people);
	var_dump($letterGroups);

?>