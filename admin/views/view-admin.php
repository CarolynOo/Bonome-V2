<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8" />
   <title>Administration</title>
</head>
<body>
   <ul>
      <?php while($m = $users->fetch()) { ?>
      <li><?= $m['id'] ?> : <?= $m['first_name'] ?><?php if($m['confirme'] == 0) { ?>
       - <a href="admin.php?type=user&confirme=<?= $m['id'] ?>">Confirmer</a>

       <?php } ?>

        - <a href="admin.php?type=product&supprime=<?= $m['id'] ?>">Supprimer</a></li>

      <?php } ?>
   </ul>

   <br /><br />

   <ul>
      <?php while($c = $products->fetch()) { ?>
      <li><?= $c['id'] ?> : <?= $c['first_name'] ?> : <?= $c['last_name'] ?><?php if($c['approuve'] == 0) { ?> - <a href="admin.php?type=product&approuve=<?= $c['id'] ?>">Approuver</a><?php } ?> - <a href="admin.php?type=product&supprime=<?= $c['id'] ?>">Supprimer</a></li>
      <?php } ?>
   </ul>
</body>
</html>