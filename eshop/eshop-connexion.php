


<?php
session_start();


$bdd = new PDO('mysql:host=localhost;dbname=bonome; charset=utf8', 'root', 'root');


if(isset($_POST['formconnexion'])) {

   $emailconnect = htmlspecialchars($_POST['emailconnect']);

   $passwordconnect = sha1($_POST['passwordconnect']);

   if(!empty($emailconnect) AND !empty($passwordconnect)) 
   {
      $requser = $bdd->prepare("SELECT * FROM user WHERE email = ? AND password = ?");

      $requser->execute(array($emailconnect, $passwordconnect));

      $userexist = $requser->rowCount();

      if($userexist == 1) {

         $userinfo = $requser->fetch();

         $_SESSION['id'] = $userinfo['id'];

         $_SESSION['first_name'] = $userinfo['first_name'];

         $_SESSION['email'] = $userinfo['email'];

         header("Location: profil.php?id=".$_SESSION['id']);
      } else {
         $erreur = "Mauvais email ou mot de passe !";
      }
   } else {
      $erreur = "Tous les champs doivent être complétés !";
   }
}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Connexion</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="../js/jquery-3.3.1.min.js"></script>
 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" media="screen" href="../css/eshop-style.css" />

</head>
<body>

   <nav class="navbar4">
      <ul>

        <li><a href="eshop-index.php">Le Shop</a></li>

        <li><a href="../atelier/index.php">Bonome</a></li>
        
        <li><a href="../eshop/index.php">Le Shop MVC</a></li>

         <li><a href="../eshop/eshop-panier.php">Consulter Panier</a></li>

       

    </ul>
</nav>
   <div align="center">
      <h2>Connexion</h2>

<form action="" method="POST" >

   <table>




      <tr>
         <td align="right">
            <label for="email">Email</label>
         </td>
         <td>
            <input type="email" placeholder="Votre email" id="email" name="emailconnect" />
         </td>
      </tr>



      <tr>
         <td align="right">
            <label for="password">Mot de Passe</label>
         </td>
         <td>
            <input type="password" placeholder="Votre mot de passe" id="password" name="passwordconnect" />
         </td>
          
      </tr>
      </table>
      <br>
      <input type="submit" name="formconnexion" value="Se Connecter">

    
      </form>
       </div>


        <?php
         if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>";
         }
         ?>
  

</body>
</html>
     
