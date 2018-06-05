<?php
require __DIR__.'/../models/model-projets.php'; // prends la bouteille


//ajoute l'alcool pour faire un cocktail
if (isset($_GET['id'])) {
	// récupérer le projet $_GET['id'] via le modèle
	$content = get_project($_GET['id']);

	// afficher la vue pour le projet $_GET['id']
	if ($content === null) {
		header('Location:.');
	} else {

		//verse l'alcool dans le verre
		require __DIR__.'/../views/projets/layout.php';
	}
} else {
	// récupérer tous les projets via le modèle

	// afficher la vue pour parcourir tous les projets
}
