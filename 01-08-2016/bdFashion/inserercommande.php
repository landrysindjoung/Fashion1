<html>
 <title>Un test d''acces à la base</title>
  <body background="fond9.jpg">
  <br>
  <?php 
    require("getChamps.php");
	$tab=getChamps("client","idclient"); 
    $tab1=getChamps("produit","idproduit");
    ?>

<form action="afficheinserercommande.php" method="post">  
 idclient<br>
  <select name="idclient"> 
  
  <?php
  while($ligne=mysql_fetch_row($tab))
    echo"<option  value=$ligne[0]>$ligne[0]</option>";
    echo "</select><br><br>";
	?>

 idproduit<br>
	<select name="idproduit"> 
  <?php
  while($ligne1=mysql_fetch_row($tab1))
    echo"<option  value=$ligne1[0]>$ligne1[0]</option>";
    echo "</select><br><br>";
	?>
	quantité:<br><input type="texte" name="quantité" value="..."><br>
	<center><input type="submit" name="submit" value="inserer"></center>
	</form>	
   
  </body>
<html>











