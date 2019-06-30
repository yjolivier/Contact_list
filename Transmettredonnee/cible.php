<!DOCTYPE html>
<html>
	<head>
		<title>bonjour </title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<center>
			<div>
				<h1>Bonjour <?php echo $_POST['nom'] . ' ' . $_POST['prenom']?> et bienvenu</h1>
				<h5><?php echo $_POST['message'];?></h5>
				<h5><?php echo $_POST['frites'] = 'oui';?></h5>
				<h4><a href="formulaire.php">RETOUR A LA PAGE PRECEDANTE</a></h4>
			</div>
		</center>
	</body>
</html>