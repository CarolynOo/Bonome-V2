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
      <title>Votre profil</title>
      <meta charset="utf-8">
   </head>
   <body>
      <div align="center">
         <h2>Profil de <?php echo $userinfo['first_name']; ?></h2>
         <br /><br />
        Prénom = <?php echo $userinfo['first_name']; ?>
         <br />
         Adresse Mail = <?php echo $userinfo['email']; ?>
         <br />
         <?php
         if(isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id']) {
         ?>
         <br />
      
         <a href="deconnexion.php">Se déconnecter</a>
         <?php
         }
         ?>
      </div>
   </body>
</html>  
