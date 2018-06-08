<?php require 'eshop-header.php'; ?>

<!--AFFICHAGE PRODUITS-->

<main>

  <div class="home">

 <div class="masonry">
    <?php $product = $DB->query('SELECT * FROM product'); ?>

    <?php foreach ( $product as $product ): ?>


     

        <div class="item">
 <a href="produits/<?= $product->id; ?>.html">
         <img src="../img/produits/<?= $product->id; ?>.jpg">

         <div class="description">

          <?= $product->product_name; ?>

          <a href="#" class="price"><?= number_format($product->price,2,',',' '); ?> €</a>

        </div>
      </a>

        <a class="add addPanier" href="eshop-addpanier.php?id=<?= $product->id; ?>" >

          Ajouter au Panier

        </a>



      </div>

 <?php endforeach ?>
    </div>

 


 </div>

</main>



<!--/AFFICHAGE PRODUITS-->


<?php
require 'eshop-footer.php';
?>


  
</body>
</html>




