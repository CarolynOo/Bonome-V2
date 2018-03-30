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
   <title>Connexion</title>
   <meta charset="utf-8">
</head>
<body>
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
     
