<?php require 'eshop-header.php'; ?>

<!--AFFICHAGE PRODUITS-->

<main>

  <div class="home">


    <?php $product = $DB->query('SELECT * FROM product'); ?>

    <?php foreach ( $product as $product ): ?>


      <div class="masonry">
        <div class="item">
         <img src="img/fake-meubles/resize/medium/<?= $product->id; ?>.jpg">
         <div class="description">
          <?= $product->product_name; ?>
          <a href="#" class="price"><?= number_format($product->price,2,',',' '); ?> €</a>
        </div>
        <a class="add addPanier" href="eshop-addpanier.php?id=<?= $product->id; ?>">
          Ajouter au Panier
        </a>

      </div>
    </div>

  </div>

<?php endforeach ?>


</main>



<!--/AFFICHAGE PRODUITS-->


<?php
require 'eshop-footer.php';
?>


  
</body>
</html>




