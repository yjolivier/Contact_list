<?php
	require 'model.php';
	if (isset($_GET['id'])) {
		$personid = (int) $_GET["id"];
		$person = get_id_binary_search($arr=null, $personid);
		$newarray = deletearr($array = null, $personid);
		$newcontactliste = json_encode($newarray);
		if (file_put_contents('contacts.json', $newcontactliste)) {
			header("location: index.php");
    	}
	}
?>