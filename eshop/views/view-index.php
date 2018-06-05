<?php ob_start(); ?>

<!--AFFICHAGE PRODUITS-->

<main>

  <h1> Les Produits</h1>

  <div class="home">


    <?php foreach ( $products as $product ): ?>


      <div class="masonry">
        <div class="item">
          <img src="../img/produits/<?= $product->id; ?>.jpg">
          <div class="description">
            <?= $product->product_name; ?>
            <a href="#" class="price"><?= number_format($product->price,2,',',' '); ?> €</a>
          </div>
          <a class="add addPanier" href="panier/?action=add&id=<?= $product->id; ?>">
            Ajouter au Panier
          </a>

        </div>
      </div>

    <?php endforeach ?>

  </div>


</main>

<!--/AFFICHAGE PRODUITS-->

<?php

$content = ob_get_clean();

require __DIR__.'/layout-default.php';