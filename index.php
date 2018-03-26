<?php require 'header.php'; ?>

<?php

var_dump($DB->query('SELECT * FROM product'));

?>
<div class="home">
	<div class="row">
		<div class="wrap">
			<?php $product = $DB->query('SELECT * FROM product'); ?>

			<?php foreach ( $product as $product ): ?>
				<div class="box">
					<div class="product full">
						<a href="#">
							<img src="img/fake-meubles/resize/medium/<?= $product->id; ?>.jpg">
						</a>
						<div class="description">
							<?= $product->product_name; ?>
							<a href="#" class="price"><?= number_format($product->price,2,',',' '); ?> €</a>
							<a class="add addPanier" href="addpanier.php?id=<?= $product->id; ?>">
							add
						</a>
							<a class="add" href="#">
								AAAADDDDDD
							</a>
						</div>
						
					
					
					</div>
				</div>
			<?php endforeach ?>
		</div>
	</div>
</div>
<div id="pagination">
	<ul class="wrap">
		<li><a href="#"> Précédente </a></li>
		<li class="page"> Page : <a href="#">2</a> of 3</li>
		<li><a href="#"> Suivante</a></li>
	</ul>
</div>


<?php require 'footer.php'; ?>