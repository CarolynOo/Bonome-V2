<?php require 'eshop-header.php'; ?>

    <div class="main__shop-section-2 shop-section-2">
        <h1>Le shop</h1>
        <div class="shop-section-2__container">
            <article></article>
            <article></article>
            <article></article>
        </div>
    </div>
</main>
<!--/SHOP-->

<div class="home">

    
      <?php $product = $DB->query('SELECT * FROM product'); ?>

      <?php foreach ( $product as $product ): ?>
        
          
          
                <img src="img/fake-meubles/resize/medium/<?= $product->id; ?>.jpg">
          
            <div class="description">
              <?= $product->product_name; ?>
              <a href="#" class="price"><?= number_format($product->price,2,',',' '); ?> €</a>
            </div>
           
         
            <a class="add addPanier" href="eshop-addpanier.php?id=<?= $product->id; ?>">
              add
            </a>
          </div>
        
      <?php endforeach ?>
    
  
</div>


<?php require 'eshop-footer.php'; ?>