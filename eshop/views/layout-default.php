<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Eshop Bonome</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" type="text/css" media="screen" href="../css/fontawesome-all.css" />
  <script src="../js/jquery-3.3.1.min.js"></script>
  <link rel="stylesheet" type="text/css" media="screen" href="../css/eshop-style.css" />

</head>
<body>

  <header>

    <nav class="navbar">
      <ul>

        <li><a href="eshop-index.php">Le Shop Old</a></li>

        <li><a href="../atelier/index.php">Bonome</a></li>
        
        <li><a href="../eshop/index.php">Le Shop MVC</a></li>

      </ul>
    </nav>

    <div id="slideshow-container">
      <div id="slideshow">
        <div id="box1">  <img src="../img/produits/1.jpg"/></div>

        <div id="box2">  <img src="../img/produits/5.jpg"/></div>

        <div id="box3">  <img src="../img/produits/11.jpg"/></div>

        <div id="box4">  <img src="../img/produits/2.jpg"/></div>

        <div id="box5">  <img src="../img/produits/11.jpg"/></div>
      </div>
    </div>
  </header>
  <?php echo $content; ?>
  <footer>

    <div id="footer">

      <p>© Bonome - 2018</p>

      <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
      <script type="text/javascript" src="../js/app.js"></script>
      <script src="../js/main-eshop.js"></script>
      <script src="../js/masonry.pkgd.min.js"></script>


    </div>
  </footer>

</body>

</html>