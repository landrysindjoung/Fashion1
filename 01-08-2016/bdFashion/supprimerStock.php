<html>
 <title>Un test d''acces à la base</title>
  <body background="fond9.jpg">
  <br><br>
  <?php 
  require("getChamps.php");
   $date=getdate();
   $jour=$date['mday'];
   $moi=$date['mon'];
   $annee=$date['year'];
  $req="delete from stock where dateperemtion<'$annee-$moi-$jour'";
  $n=mysql_query($req);
 if(!$n)echo"aucun stock périmé n'a été trouvé!";
 else echo"Suppression effectuée avec succès!";
   ?>
  
  </body>
<html>











