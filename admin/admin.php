<?php
$bdd = new PDO('mysql:host=localhost;dbname=bonome;charset=utf8', 'root', 'root');
if(isset($_GET['type']) AND $_GET['type'] == 'user') {
   if(isset($_GET['confirme']) AND !empty($_GET['confirme'])) {
      $confirme = (int) $_GET['confirme'];
      $req = $bdd->prepare('UPDATE user SET confirme = 1 WHERE id = ?');
      $req->execute(array($confirme));
   }
   if(isset($_GET['supprime']) AND !empty($_GET['supprime'])) {
      $supprime = (int) $_GET['supprime'];
      $req = $bdd->prepare('DELETE FROM user WHERE id = ?');
      $req->execute(array($supprime));
   }
} elseif(isset($_GET['type']) AND $_GET['type'] == 'product') {
   if(isset($_GET['approuve']) AND !empty($_GET['approuve'])) {
      $approuve = (int) $_GET['approuve'];
      $req = $bdd->prepare('UPDATE product SET approuve = 1 WHERE id = ?');
      $req->execute(array($approuve));
   }
   if(isset($_GET['supprime']) AND !empty($_GET['supprime'])) {
      $supprime = (int) $_GET['supprime'];
      $req = $bdd->prepare('DELETE FROM commentaires WHERE id = ?');
      $req->execute(array($supprime));
   }
}
$users = $bdd->query('SELECT * FROM user ORDER BY id DESC LIMIT 0,5');
$products = $bdd->query('SELECT * FROM product ORDER BY id ASC LIMIT 0,5');

require 'view-admin.php';