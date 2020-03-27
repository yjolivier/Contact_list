<?php 
/**
 * save data in json file
 */ 
if (isset($_POST['valider'])){
	$nom = htmlspecialchars($_POST['nom']);
	$prenoms = htmlspecialchars($_POST['prenoms']);
	$sexe = $_POST['sexe'];
	$age = htmlspecialchars($_POST['age']);
	$email = htmlspecialchars($_POST['email']);
	$contact = htmlspecialchars($_POST['contact']);
	$current_data = file_get_contents('contacts.json');
	$oldarray = json_decode($current_data, true);
	$endelement = end($oldarray);
	$item  = array(
		'id' => ($endelement['id']+1),
		'nom' => $nom, 
		'prenom' => $prenom,
		'sexe' => $sexe, 
		'age' => $age,
		'email' => $email,
		'contact' => $contact
	);
	$oldarray[] = $item;
	$newarray = json_encode($oldarray);

	if (file_put_contents('contacts.json', $newarray)) {
		header('Location: listing.php');
	}
}
