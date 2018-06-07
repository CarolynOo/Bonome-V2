<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Eshop Bonome</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" type="text/css" media="screen" href="../css/fontawesome-all.css" />
  <script src="../js/jquery-3.3.1.min.js"></script>
  <link rel="stylesheet" type="text/css" media="screen" href="../../css/eshop-style.css" />


</head>
<body>

    <nav class="navbar3">
      <ul>

        <li><a href="eshop-index.php">Le Shop Old</a></li>

        <li><a href="../atelier/index.php">Bonome</a></li>
        
        <li><a href="../eshop/index.php">Le Shop MVC</a></li>

       

    </ul>
</nav>

<div class="checkout">
    <div class="title">

       <main class="main">


        <h2>Votre Panier</h2>



    </div>
    <form method="post" action="eshop-panier.php">
        <div class="table">
            <div class="wrap">
             <table border="1" width="70%">
                <thead>
                   <tr>
                       <th class="img"> Photo Produit </th>
                       <th>Produit</th>
                       <th class="number">Prix Unitaire Sans TVA</th>

                       <th class="number">Quantité</th>
                       <th class="number">Prix Total avec TVA</th>
                       <th class="action">Action</th>
                   </tr>
               </thead>
               <tbody>

                   <?php
                   foreach($products as $product):
                    ?>



                    <tr>
                       <td> <img class="imgproduct" src="../../img/produits/<?= $product->id; ?>.jpg" width="200px"> </td>

                       <td class="name"><?= $product->product_name; ?></td>

                       <td class="price"><?= number_format($product->price,2,',',' '); ?> €</td>

                       <td class="quantity"><input type="text" name="panier[quantity][<?= $product->id; ?>]" value="<?= $_SESSION['panier'][$product->id]; ?>"><input type="submit" value="Recalculer"></td>

                       <td class="subtotal"><?= number_format($product->price * 1.196,2,',',' '); ?> €</td>

                       <td class="action">

                           <a href="eshop-panier.php?delPanier=<?= $product->id; ?>" class="del"><img class="icon" src="../../img/trash-icon.png" width="50px"></a>
                       </tr>



                   <?php endforeach; ?>

               </tbody>
           </table>


           <div class="rowtotal">
           <p> Grand Total avec TVA:</p><span class="total"><?= number_format($panier->total() * 1.196,2,',',' '); ?> € </span>

        </div>


    </div>
</div>
</form>
</div>
</main>


</body>
</html>




