<?php
	$nombre_de_lignes = 1;

	while ($nombre_de_lignes <= 20)
	{
	    echo 'Je ne dois pas regarder les mouches voler quand j\'apprends le PHP.<br />';
	    $nombre_de_lignes++; // $nombre_de_lignes = $nombre_de_lignes + 1
	}
?>
<?php
$nombre_de_lignes = 1;

while ($nombre_de_lignes <= 100)
{
    echo 'Ceci est la ligne n°' . $nombre_de_lignes . '\n';
    $nombre_de_lignes++;
}
?>

<?php
	$nom = 'Charles'; 
	$prenoms = 'Baudelaire';
	$note1 = 12;
	$note2 = 20;
	$moyenne = ($note1 + $note2) / 2;
	echo "L'élève $nom $prenoms a eu $moyenne de moyenne";
?>