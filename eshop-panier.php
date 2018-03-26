<?php require 'eshop-connexiondb.php'; ?>
<div class="checkout">
    <div class="title">
        <div class="wrap">
        <h2 class="first">Shopping Cart</h2>
        </div>
    </div>
    <form method="post" action="eshop-panier.php">
    <div class="table">
        <div class="wrap">

            <div class="rowtitle">
                <span class="name">Product name</span>
                <span class="price">Price</span>
                <span class="quantity">Quantity</span>
                <span class="subtotal">Prix avec TVA</span>
                <span class="action">Actions</span>
            </div>

            <?php
            $ids = array_keys($_SESSION['panier']);
            if(empty($ids)){
                $products = array();
            }else{
                $products = $DB->query('SELECT * FROM product WHERE id IN ('.implode(',',$ids).')');
            }
            foreach($products as $product):
            ?>
            <div class="row">
                <a href="#" class="img"> 
              
                <img src="img/fake-meubles/resize/medium/<?= $product->id; ?>.jpg" height="53">

                <span class="name"><?= $product->product_name; ?></span>

                <span class="price"><?= number_format($product->price,2,',',' '); ?> €</span>

                <span class="quantity"><input type="text" name="panier[quantity][<?= $product->id; ?>]" value="<?= $_SESSION['panier'][$product->id]; ?>"></span>

                <span class="subtotal"><?= number_format($product->price * 1.196,2,',',' '); ?> €</span>

                <span class="action">

                    <a href="eshop-panier.php?delPanier=<?= $product->id; ?>" class="del"><img src="img/del.png"></a>
                </span>
            </div>
            <?php endforeach; ?>
            <div class="rowtotal">
                Grand Total : <span class="total"><?= number_format($panier->total() * 1.196,2,',',' '); ?> € </span>
            </div>
            <input type="submit" value="Recalculer">
        </div>
    </div>
    </form>
</div>
<?php require 'eshop-footer.php'; ?>


<!--CHECKOUT-->
<main class="main">
    <div class="main__checkout-section checkout-section">
        <div class="checkout-section-title">
            <h2>Récapitulatif Panier</h2>
        </div>
        <div class="product-container">
            <div class="product-img"></div>
            <div class="product-infos">
                <p>Nom produit</p>
                <p>blablabla</p>
            </div>
            <div class="product-price">
                <p>prix</p>
                <p>350€</p>
            </div>
            <div class="product-action">
                <button>Confirmer</button>
                <button>Supprimer</button>
            </div>
        </div>
    </div>
</main>
<!--/CHECKOUT-->