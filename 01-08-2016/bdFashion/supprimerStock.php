<html>
 <title>Un test d''acces � la base</title>
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
 if(!$n)echo"aucun stock p�rim� n'a �t� trouv�!";
 else echo"Suppression effectu�e avec succ�s!";
   ?>
  
  </body>
<html>











