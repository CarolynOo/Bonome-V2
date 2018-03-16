<?php
require '_header.php'
?>
<!DOCTYPE html>
<html>
<head>
	<title>E-shop Bonome</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/styleshop.css" type="text/css" media="screen" charset="utf-8">
</head>

<body>

<div id="header">
	<div class="wrap">
		<div class="menu">
				<a href="index.php" class="logo">Bonome</a>
				<h1>Achetez les beaux meubles</h1>
				<ul class="panier">
					<li class="caddie"><a href="panier.php">Caddie</a></li>
					<li class="items">
						Produits
						<span id="count"><?= $panier->count(); ?></span>
					</li>
					<li class="total">
						TOTAL
						<span><span id="total"><?= number_format($panier->total(),2,',',' '); ?></span> €</span>
					</li>
				</ul>
		</div>
	</div>
</div>

<div id="subheader">
	<div class="wrap">
		<h2>Bienvenue, vous pouvez vous  <a href="#">connecter</a> ou <a href="#">créer un compte</a> .</h2>
	</div>
</div>


<div id="wrap">

	<div id="menu">
		<ul class="wrap">
			<li> <a href="#">Toutes les catégories</a> </li>
			<li> <a href="#">Tables</a> </li>
			<li> <a href="#">Chaises</a> </li>
			<li> <a href="#">Lampes</a> </li>
			
		</ul>
	</div>
	<div id="ariane">
		<div class="wrap">		Vous êtes dans la section: » <a href="#">Mobilier</a>
		</div>
	</div>
	<div id="main" class="clearfix">
