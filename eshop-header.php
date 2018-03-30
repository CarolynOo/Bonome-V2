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
  <script src="js/jquery-3.3.1.min.js"></script>
  <link rel="stylesheet" type="text/css" media="screen" href="css/eshop-style.css" />

</head>
<body>

  <!--SHOP-->



  <header>
    <nav>
      <ul>
        <li><a href="#">L'atelier</a></li>
        <li><a href="#">Bonome</a></li>
        <li><a href="#">Le Shop</a></li>

      </ul>
    </nav>




    <div class='container'>
      <ul class='carousel is-set'>
        <li class='carousel-seat'>

          <img src="img/fake-meubles/resize/1.jpg" alt="dev1" class="carrousel_img"></img>
        </li>
        <li class='carousel-seat'>

          <img src="img/fake-meubles/resize/5.jpg" alt="dev2" class="carrousel_img"></img>
        </li>
        <li class='carousel-seat'>

          <img src="img/fake-meubles/resize/6.jpg" alt="dev3" class="carrousel_img"></img>
        </li>
        <li class='carousel-seat'>

          <img src="img/fake-meubles/resize/8.jpg" alt="dev4" class="carrousel_img"></img>
        </li>
        <li class='carousel-seat'>

          <img src="img/fake-meubles/resize/1.jpg" alt="dev5" class="carrousel_img"></img>
        </li>
        <li class='carousel-seat is-ref'>

          <img src="img/fake-meubles/resize/5.jpg" alt="dev6" class="carrousel_img"></img>
        </li>
      </ul>
    </div>
    <div class='controls'>
      <button class='toggle' data-toggle='prev'>Prev</button>
      <button class='toggle' data-toggle='next'>Next</button>
    </div>



  </header>

</main>

<?php
require 'eshop-footer.php';
?>
