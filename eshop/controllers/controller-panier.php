<?php

require __DIR__.'/../eshop-connexiondb.php';

$ids = array_keys($_SESSION['panier']);

$products = array();

if (!empty($ids)) {
    $products = $DB->query('SELECT * FROM product WHERE id IN ('.implode(',',$ids).')');
}

require __DIR__.'/../views/view-panier.php';