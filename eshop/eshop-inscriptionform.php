<?php require 'eshop-inscription.php'; ?>


<!DOCTYPE html>
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

<div class="tabconnexion">
	<div align="center">
		<h2>Inscription</h2>
<!-- 
		<form action="" method="POST" >

			<table>
			

				<tr>
					<td align="right">
						<label for="prenom">Prénom</label>
					</td>
					<td>
						<input type="text" placeholder="Votre prénom" id="Prénom" name="first_name" />
					</td>
				</tr>

					<tr>
					<td align="right">
						<label for="nom">Nom</label>
					</td>
					<td align="right">
						<input type="text" placeholder="Votre nom" id="nom" name="last_name"/>
					</td>

				</tr>

				<tr>
					<td align="right">
						<label for="email">Email</label>
					</td>
				<td>
						<input type="email" placeholder="Votre email" id="email" name="email" />
					</td>
				</tr>

					<tr>
					<td align="right">
						<label for="email2">Confirmation Email</label>
					</td>
				<td>
						<input type="email" placeholder="Confirmez votre email" id="email" name="email2" />
					</td>
				</tr>

				<tr>
					<td align="right">
						<label for="password">Mot de Passe</label>
					</td>
					<td>
						<input type="password" placeholder="Votre mot de passe" id="password" name="password" />
					</td>
				</tr>

				<tr>
					<td align="right">
						<label for="password2">Confirmation Mot de Passe</label>
					<td>
						<input type="password" placeholder="Confirmation" id="password2" name="password2" />
					</td>
				</tr>

				<tr>
					<td align="right">
						<label for="address">Adresse</label>
					</td>
					<td>
						<input type="text" placeholder="Votre adresse" id="address" name="address" />
					</td>
				</tr>
			</table>
			<br>
				<input type="submit" name="forminscription" value="Création de compte">
		</form> -->


		<!--NOUVEAU FORMULAIRE -->


       <div class="container">
  <form action="" method="POST">
    <div class="row">
      <div class="col-25">
        <label for="fname">Prénom</label>
      </div>
      <div class="col-75">
       <input type="text" placeholder="Votre prénom" id="Prénom" name="first_name" />
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Nom de Famille</label>
      </div>
      <div class="col-75">
        <input type="text" placeholder="Votre nom" id="nom" name="last_name"/>
      </div>
    </div>

        <div class="row">
      <div class="col-25">
        <label for="email">Email</label>
      </div>
      <div class="col-75">
      <input type="email" placeholder="Votre email" id="email" name="email" />
      </div>
    </div>

        <div class="row">
      <div class="col-25">
    	<label for="email2">Confirmation Email</label>
      </div>
      <div class="col-75">
    
      <input type="email" placeholder="Confirmez votre email" id="email" name="email2" />
      </div>
    </div>


     <div class="row">
      <div class="col-25">
        <label for="password">Mot de Passe</label>
      </div>
      <div class="col-75">
       <input type="password" placeholder="Mot de passe" id="password" name="password" />
      </div>
    </div>

     <div class="row">
      <div class="col-25">
        <label for="password2"> Confirmation Mot de Passe</label>
      </div>
      <div class="col-75">
       <input type="password" placeholder="Confirmation mot de passe" id="password2" name="password2" />
      </div>
    </div>

    <div class="row">
      <div class="col-25">
       <label for="address">Adresse</label>
      </div>
      <div class="col-75">
      <input type="address" placeholder="Votre adresse" id="address" name="address" />
      </div>
    </div>
    
 
    <div class="row">
      <input type="submit" name="forminscription" value="Création de compte">
    </div>
  </form>

		<!--FIN NOUVEAU FORMULAIRE -->

		  <?php
         if(isset($erreur)) {
            echo '<font color="red">'.$erreur.'<a href="eshop-connexion.php"><p>Connectez-vous</p></a>"</font>"' ;
         }
         ?>
	</div>

	</div>

</body>
</html>