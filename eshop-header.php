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
<main class="main">
 
<div class="navbar">
<header>
    <nav>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">Blog</a></li>
      </ul>
    </nav>
  </header>
  <div class="title">
    <h1>fancy sticky nav</h1>
    <p>vv scroll vv</p>
  </div>
  
</div>

  

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

    <section class="main__shop-carrousel-section">
        <div class="shop-carrousel">
           
        </div>
        <div class="main__articles">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </section>
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