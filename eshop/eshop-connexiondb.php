<?php
require __DIR__.'/eshop-db.class.php';
require __DIR__.'/eshop-panier.class.php';
$DB = new DB();
$panier = new panier($DB);
?>