<!DOCTYPE html>
<html>
	<head>
		<title>Transmettez des données avec l'URL</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body id="page1">
		<center>
			<div>
			    Cette page ne contient que du HTML.<br />
			    Veuillez taper votre prénom :<br>

			<form action="cible.php" method="post">
					SAISIR NOM :<input type="text" name="nom" />
					<br>
					<br>
				    SAISIR PRENOM :<input type="text" name="prenom" />
				    <br>
				    <br>
				    <textarea name="message" rows="8" cols="45">
					    Avez vous un message pour mooi ?
					</textarea>
					<br>
					<br>
					Aimez-vous les frites ?
					<input type="radio" name="frites" value="oui" id="oui" checked="checked" /> 
					<label for="oui">Oui</label>
					<input type="radio" name="frites" value="non" id="non" /> 
					<label for="non">Non</label>
					<br>
					<br>
				    <input type="submit" value="Valider" />
			</form>
			</div>
		</center>
	</body>
</html>