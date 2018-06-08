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
   <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" media="screen" href="../css/eshop-style.css" />

</head>
<body>

<nav class="navbar3">
     <ul>
       <li><a href="eshop-index.php">Le Shop</a></li>
      <li><a href="../atelier/index.php">Bonome</a></li>  
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
                    <th class="number">Prix Unitaire avec TVA</th>
                     <th class="number">Quantité</th>
                 
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
                     <td> <img class="imgproduct" src="../img/produits/<?= $product->id; ?>.jpg"> </td>

                     <td class="name"><?= $product->product_name; ?></td>

                    <td class="price"><?= number_format($product->price,2,',',' '); ?> €</td>

                     <td class="subtotal"><?= number_format($product->price * 1.196,2,',',' '); ?> €</td>

                    <td class="quantity"><input type="text" name="panier[quantity][<?= $product->id; ?>]" value="<?= $_SESSION['panier'][$product->id]; ?>"><input type="submit" value="Recalculer"></td>

                   

                    <td class="action">

                     <a href="eshop-panier.php?delPanier=<?= $product->id; ?>" class="del"> <i class="fas fa-trash-alt"></i></a>
                    </tr>
                                    
                   
                   
                    <?php endforeach; ?>

                     </tbody>
                    </table>


            <div class="rowtotal">
                  <p> Grand Total avec TVA: <span class="total"><?= number_format($panier->total() * 1.196,2,',',' '); ?> € </p> </span>
      
        </div>

            <a href="eshop-index.php">  <p> Continuer le shopping</p> </a>

             <a href="eshop-conxcrea.php">  <p> Valider mon choix et procéder au paiement</p> </a>
  

                    
                </div>
            </div>
        </form>
    </div>
</main>

<footer>

    <div id="footer">

    
              <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
      <script type="text/javascript" src="../js/app.js"></script>
      <script src="../js/main-eshop.js"></script>
      <script src="../js/masonry.pkgd.min.js"></script>

    </div>
</footer>
</body>
</html>




