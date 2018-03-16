<?php require 'inscription.php'; ?>


<!DOCTYPE html>
<html>
<head>
	<title>Inscription</title>
	<meta charset="utf-8">
</head>
<body>
	<div align="center">
		<h2>Inscription</h2>

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
		</form>

		  <?php
         if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>";
         }
         ?>
	</div>

</body>
</html>