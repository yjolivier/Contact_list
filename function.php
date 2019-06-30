<?php
	function calculdisc($a, $b, $c){
		$disc = (($b*$b)-4*$a*$c);
		echo '<font face=\'arial\' size=\'5\' color=\'blue\'>Le discriminant de la fonction de la forme ' . $a .'x2 + ' . $b .'x + ' . $c .' saisie est ' . $disc .'</font>';
	}
	calculdisc(1, (-1), 2)
?>

<!--Les fonctions prêtes à l'emploi de PHP-->
<h2>Lien de la documentation des fonction php</h2>
<p>https://www.php.net/manual/fr/funcref.php</p>

<font face="arial" size="5" color="#2d394c">

	<h2>La fonction <b>strlen()</b></h2>

<?php
	$phrase = 'Bonjour tout le monde ! Je suis une phrase !';
	$longueur = strlen($phrase);
	//La fonction *strlen()* permet de retourner le nombre de lettres et de chiffres dont une chaine est constituée (espaces compris).
	 
	 
	echo 'La phrase ci-dessous comporte ' . $longueur . ' caractères :<br />' . $phrase;
?>
		
	<h2>La fonction <b>str_replace</b></h2>
<?php
	$ma_variable = str_replace('b', 'p', 'bim bam boum');

	//str_replace remplace une chaîne de caractères par une autre.

	// 1.     la chaîne qu'on recherche (ici, les « b » (on aurait pu rechercher un mot aussi)) ;

	// 2. la chaîne qu'on veut mettre à la place (ici, on met des « p » à la place des « b ») ;

	// 3. la chaîne dans laquelle on doit faire la recherche.
	 
	echo '<br>' . $ma_variable;
?>

	<h2>La fonction <b>str_shuffle</b></h2>

<?php
	$chaine = 'Cette chaine va etre melangee !';

	$chaine = str_shuffle($chaine);
	 
	//Pour mélanger aléatoirement les caractères de votre chaîne !
	echo $chaine;
?>
	<h2>La fonction <b>strtolower</b></h2>
	<p>strtolower met tous les caractères d'une chaîne en minuscules.</p>
	<p> COMMENT CA JE CRIE TROP FORT ??? Devient donc: </p>
<?php
	$chaine = 'COMMENT CA JE CRIE TROP FORT ???';
	$chaine = strtolower($chaine);
	 
	echo $chaine;
?>

	<h2>La fonction <b>date</b></h2>
<?php
	// Enregistrons les informations de date dans des variables

	$jour = date('d');
	$mois = date('m');
	$annee = date('Y');

	$heure = date('H');
	$minute = date('i');

	// Maintenant on peut afficher ce qu'on a recueilli
	echo 'Bonjour ! Nous sommes le ' . $jour . '/' . $mois . '/' . $annee . 'et il est ' . $heure. ' h ' . $minute;
?>
</font>