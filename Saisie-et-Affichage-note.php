<?php
	$notes = [];
	$action = null;
	while ($action !== 'fin') {
		$action = readline('Veuillez saisir vos notes sinon tapez \'fin\' pour sortir svp ! : ');
		if ($action !== 'fin') {
			$notes[] = (int)$action;
		}
	}
	echo "Vos notes sont: \n";
	foreach ($notes as $note) {
		echo "- $note \n";
	}
?>
 