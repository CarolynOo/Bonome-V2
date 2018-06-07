<?php
require __DIR__.'/../model/model-connexiondb.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Eshop Bonome</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="../js/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="../css/fontawesome-all.css" />
  <link rel="stylesheet" type="text/css" media="screen" href="../css/eshop-style.css" />

</head>
<body>

  <div class="checkout">
    <div class="title">

     <main class="main">


        <h2>Votre Panier</h2>

       

    </div>
    <form method="post" action="controller-panier.php">
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
                 $ids = array_keys($_SESSION['panier']);

                 if(empty($ids)){
                    $products = array();
                }else{
                    $products = $DB->query('SELECT * FROM product WHERE id IN ('.implode(',',$ids).')');
                }
                foreach($products as $product):
                    ?>

                  

                    <tr>
                     <td> <img class="imgproduct" src="../../img/produits/<?= $product->id; ?>.jpg"> </td>

                     <td class="name"><?= $product->product_name; ?></td>

                    <td class="price"><?= number_format($product->price,2,',',' '); ?> €</td>

                    <td class="quantity"><input type="text" name="panier[quantity][<?= $product->id; ?>]" value="<?= $_SESSION['panier'][$product->id]; ?>"><input type="submit" value="Recalculer"></td>

                    <td class="subtotal"><?= number_format($product->price * 1.196,2,',',' '); ?> €</td>

                    <td class="action">

                     <a href="../eshop/controller/controller-panier.php?delPanier=<?= $product->id; ?>" class="del"><img class="icon" src="../../img/trash-icon.png"></a>
                    </tr>
                                    
                   
                   
                    <?php endforeach; ?>

                     </tbody>
                    </table>


            <div class="rowtotal">
                Grand Total avec TVA: <span class="total"><?= number_format($panier->total() * 1.196,2,',',' '); ?> € </span>
      
        </div>

                    
                </div>
            </div>
        </form>
    </div>
</main>

<footer>

    <div id="footer">

      

    </div>
</footer>
</body>
</html>




