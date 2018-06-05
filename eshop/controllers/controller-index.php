<?php

require __DIR__.'/../eshop-connexiondb.php';

$products = $DB->query('SELECT * FROM product');

require __DIR__.'/../views/view-index.php';
