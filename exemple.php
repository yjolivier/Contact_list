<!DOCTYPE html>
<html>
	<head>
		<title>Les differents exemple</title>
	</head>
	<body>
		<h1>Exemple 4</h1>
		<font face="arial" size="2">Le texte en HTML</font>
			<!--le code php------------>
			<?php
				$heure = date("H\hi");//ex. 13h15
				//http://php.net/manual/fr/function.date.php
				print("<font size=\"2\" face=\"Arial\">et celui en PHP.</font>");
			?>
			<!--retour du code HTML-->
			<br>
			<font size="2" face="Arial">
				Il est <?php echo $heure; ?>		
			</font>
	</body>
</html>