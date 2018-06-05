<?php

// Connexion BDD


	$bdd = new PDO('mysql:host=localhost;dbname=bonome; charset=utf8', 'root', 'root');
	
if(isset($_POST['forminscription'])) 
{
 $firstname = htmlspecialchars($_POST['first_name']);

$lastname = htmlspecialchars($_POST['last_name']);
   $email = htmlspecialchars($_POST['email']);
   $email2 = htmlspecialchars($_POST['email2']);
   $address = htmlspecialchars($_POST['address']);



   // sha1 permet de mieux sécuriser le mdp
  
   $password = sha1($_POST['password']);

   $password2 = sha1($_POST['password2']);

   if(!empty($_POST['first_name']) AND !empty($_POST['last_name']) AND !empty($_POST['email']) AND !empty($_POST['email2']) AND !empty($_POST['password']) AND !empty($_POST['password2'])  AND !empty($_POST['address'])) 

   {
      
         if($email == $email2) {

            if(filter_var($email, FILTER_VALIDATE_EMAIL)) {

               $reqmail = $bdd->prepare("SELECT * FROM user WHERE email = ?");
               $reqmail->execute(array($email));
               $mailexist = $reqmail->rowCount();

               if($mailexist == 0) {

                  if($password == $password2) {

                     $insertuser = $bdd->prepare("INSERT INTO user(first_name, last_name, email, password, address) VALUES(?, ?, ?, ?, ?)");

                     $insertuser->execute(array($firstname, $lastname, $email, $password, $address));

                     $erreur = "Votre compte a bien été créé !";
                  } 

                  else {
                     $erreur = "Vos mots de passe ne correspondent pas !";
                  }

               } else {
                  $erreur = "Adresse mail déjà utilisée !";
               }

            } else {
               $erreur = "Votre adresse mail n'est pas valide !";
            }

         } else {
            $erreur = "Vos adresses mail ne correspondent pas !";
         }
      
      }
   else {
      $erreur = "Tous les champs doivent être complétés !";
   }
}

?>