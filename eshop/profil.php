<?php
session_start();

$bdd = new PDO('mysql:host=localhost;dbname=bonome; charset=utf8', 'root', 'root');

if(isset($_GET['id']) AND $_GET['id'] > 0) {
   $getid = intval($_GET['id']);
   $requser = $bdd->prepare('SELECT * FROM user WHERE id = ?');
   $requser->execute(array($getid));
   $userinfo = $requser->fetch();}
?>


<html>
 <head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Eshop Bonome</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="../js/jquery-3.3.1.min.js"></script>
 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" media="screen" href="../css/eshop-style.css" />

</head>
   <body>
      <header>
   <nav class="navbar4">
      <ul>

        <li><a href="eshop-index.php">Le Shop</a></li>
         <li><a href="../eshop/eshop-panier.php">Consulter Panier</a></li>

       

    </ul>
</nav>
</header>
      <div align="center">
         <h2>Bonjour <?php echo $userinfo['first_name']; ?>, </h2>
         <br />
         <p>Vous êtes maintenant connecté(e)!</p>
         <p>Poursuivez votre shopping en cliquant <a> ici </a></p>
         <br> <p>Ou bien déconnectez-vous </p>
          <a href="deconnexion.php">Se déconnecter</a>

         <br />
     <!--    Prénom  <?php echo $userinfo['first_name']; ?>
         <br />
         Adresse Mail = <?php echo $userinfo['email']; ?>
         <br /> -->
         <?php
         if(isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id']) {
         ?>
         <br />
      
    
         <?php
         }
         ?>
      </div>
   </body>
</html>  
