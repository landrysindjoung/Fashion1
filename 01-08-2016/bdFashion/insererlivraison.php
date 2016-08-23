<html>
 <title>Un test d''acces à la base</title>
  <body background="fond9.jpg">
  <?php 
    require("getChamps.php");
	$tab=getChamps("fournisseur","idfournisseur"); 
    $tab1=getChamps("produit","idproduit");
    ?>

<form action="afficheinsererlivraison.php" method="post">  
 idfournisseur<br>
  <select name="idfournisseur"> 
  
  <?php
  while($ligne=mysql_fetch_row($tab))
    echo"<option  value=$ligne[0]>$ligne[0]</option>";
    echo "</select><br><br>";
	?>
	<br>
 idproduit<br>
	<select name="idproduit"> 
  <?php
  while($ligne1=mysql_fetch_row($tab1))
    echo"<option  value=$ligne1[0]>$ligne1[0]</option>";
    echo "</select><br><br>";
	?>
	<center><input type="submit" name="submit" value="inserer"></center>
	</form>
   <?php   
   ?>
   
  </body>
<html>











