<?php
require 'eshop-db.class.php';
require 'eshop-panier.class.php';
$DB = new DB();
$panier = new panier($DB);
?>