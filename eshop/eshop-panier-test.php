<?php
require 'eshop-connexiondb.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Eshop Bonome</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="../js/jquery-3.3.1.min.js"></script>
  <link rel="stylesheet" type="text/css" media="screen" href="../css/eshop-style.css" />
 </head>
<body>

<header>
    <nav class="navbar">
      <ul>
      
        <li><a href="eshop-index.php">Le Shop de Bonome</a></li>

      </ul>
    </nav>
    </header>

    <main class="main">

    <h2> TOTAL</h2>

       <table border="1" width="100%">
        <thead>
                 <tr>
                 <th class="img"> Photo Produit </th>
                <th class="number">Quantité</th>
                <th>Produit</th>
                <th class="number">Prix Unitaire</th>
                <th class="number">Prix Total</th>
              
            </tr>
        </thead>
        <tbody>
                <tr>
                        <td>Row 2, cell 1</td>
                        <td>Row 2, cell 2</td>
                        <td>Row 2, cell 3</td>
                </tr>
                <tr>
                        <td>Row 3, cell 1</td>
                        <td>Row 3, cell 2</td>
                        <td>Row 3, cell 3</td>
                </tr>
                <tr>
                        <td>Row 4, cell 1</td>
                        <td>Row 4, cell 2</td>
                        <td>Row 4, cell 3</td>
                </tr>
        </tbody>
</table>
  

</main>

</body>