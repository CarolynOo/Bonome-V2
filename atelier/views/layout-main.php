<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Atelier Bonome</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

  <script src="../js/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="../css/fontawesome-all.css" />
  <link rel="stylesheet" type="text/css" media="screen" href="../css/style.css" />
 

</head>
<body>

  <header>

    <nav class="navbar">
      <ul>
        <li><a href="../atelier/controllers/controller-presentation.php">Atelier</a></li>
        
        <li><a href="../eshop/eshop-index.php">Le Shop</a></li>

      </ul>
    </nav>



    <div id="slideshow-container">
      <div id="slideshow">
        <div id="box1">  <img src="../img/fake-meubles/resize/5.jpg"/></div>

        <div id="box2">  <img src="../img/fake-meubles/resize/5.jpg"/></div>

        <div id="box3">  <img src="../img/fake-meubles/resize/8.jpg"/></div>

        <div id="box4">  <img src="../img/fake-meubles/resize/1.jpg"/></div>

        <div id="box5">  <img src="../img/fake-meubles/resize/2.jpg"/></div>
      </div>
    </div>
  </header>

  <main>

  <?php echo $content; ?>

  </main>
  <script src="../js/main.js"></script>
  <script src="../js/masonry.pkgd.min.js"></script>




 </body>
 </html>