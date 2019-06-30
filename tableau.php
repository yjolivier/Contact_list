<?php
	// La fonction array permet de créer un array
	$prenoms = array ('François', 'Michel', 'Nicole', 'Véronique', 'Benoît');
	// Puis on fait une boucle pour tout afficher :
	for ($numero = 0; $numero < 5; $numero++)
	{
	    echo $prenoms[$numero] . '<br />'; // affichera $prenoms[0], $prenoms[1] etc.
	}
?>
<br>
<!--créer manuellement le tableau case par case-->
<?php
	$prenoms[0] = 'François';
	$prenoms[1] = 'Michel';
	$prenoms[2] = 'Nicole';
	//affiche un element du tableau 
	echo $prenoms[1];
?>

<!--On crée notre array $coordonnees-->
<?php
$coordonnees = array (
    'prenom' => 'François',
    'nom' => 'Dupont',
    'adresse' => '3 Rue du Paradis',
    'ville' => 'Marseille');
	echo $coordonnees['ville'];
?>
<?php
// On crée notre array $prenoms
$prenoms = array ('François', 'Michel', 'Nicole', 'Véronique', 'Benoît');
?>
<br>
<br>
<br>
<font size="+3" face="arial">La boucle foreach</font><br>
<!--La boucle foreach

*C'est une sorte de boucle for spécialisée dans les tableaux.

*foreach va passer en revue chaque ligne du tableau, et lors de chaque passage, elle va mettre la valeur de cette ligne dans une variable temporaire (par exemple$element).-->

<?php
	$prenoms = array ('François', 'Michel', 'Nicole', 'Véronique', 'Benoît');

	foreach($prenoms as $element)
	{
	    echo $element . '<br />'; // affichera $prenoms[0], $prenoms[1] etc.
	}
?>
<br>
<br>
<!--L'avantage de foreach est qu'il permet aussi de parcourir les tableaux associatifs.-->
<?php
	$coordonnees = array (
	    'prenom' => 'François',
	    'nom' => 'Dupont',
	    'adresse' => '3 Rue du Paradis',
	    'ville' => 'Marseille');

	foreach($coordonnees as $element)
	{
	    echo $element . '<br />';
	}
?>
<br>
<!--on peut aussi récupérer la clé de l'élément. On doit dans ce cas écrire foreach comme ceci :-->

<?php foreach($coordonnees as $cle => $element) ?>

<!--Afficher rapidement un array avec print_r

Parfois, en codant votre site en PHP, vous aurez sous les bras un array et vous voudrez savoir ce qu'il contient, juste pour votre information. Vous pourriez utiliser une boucle for ou, mieux, une boucle foreach. Mais si vous n'avez pas besoin d'une mise en forme spéciale et que vous voulez juste savoir ce que contient l'array, vous pouvez faire appel à la fonction print_r. C'est une sorte de echo spécialisé dans les arrays.

Cette commande a toutefois un défaut : elle ne renvoie pas de code HTML comme <br /> pour les retours à la ligne. Pour bien les voir, il faut donc utiliser la balise HTML <pre> qui nous permet d'avoir un affichage plus correct.-->

<h2>Afficher rapidement un array avec print_r</h2>
<?php
	$coordonnees = array (
	    'prenom' => 'François',
	    'nom' => 'Dupont',
	    'adresse' => '3 Rue du Paradis',
	    'ville' => 'Marseille');

	echo '<pre>';
	print_r($coordonnees);
	echo '</pre>';
?>
<!---->