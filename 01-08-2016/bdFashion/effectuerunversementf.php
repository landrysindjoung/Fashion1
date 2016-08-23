<html>
 <title>Un test d''acces à la base</title>
  <body background="fond9.jpg">
  <u>Bien vouloir saisir les informations sur le fournisseur</u><br>
  <?php 
    require("getChamps.php");
	$tab=getChamps("fournisseur","nom"); 
    $tab1=getChamps("fournisseur","idFournisseur");
    ?>

<form action="afficheeffectuerunversementf.php" method="post"> 
<br><tr><td>numero versement:</td><td><input type="texte" name="numvers" value=""></td></tr>
 <br><br>
 
 nom  &  prenom 
  <select name="nom"> 
  
  <?php
  while($ligne=mysql_fetch_row($tab))
    echo"<option  value=$ligne[0]>$ligne[0]</option>";
    echo "</select><br><br>";
	?>
 idfournisseur
  <select name="idFournisseur"> 
  <?php
  while($ligne1=mysql_fetch_row($tab1))
    echo"<option  value=$ligne1[0]>$ligne1[0]</option>";
    echo "</select><br><br>";
	?>
  <tr><td>montant versement:</td><td><input type="texte" name="montant" value=""></td></tr>
	<center><input type="submit" name="submit" value="crediter"></center>
	</form>
   <?php 
   echo" <center><a href=\"manipulationVendeur.php\">RETOUR</a></center>";
   ?>
  </body>
<html>











