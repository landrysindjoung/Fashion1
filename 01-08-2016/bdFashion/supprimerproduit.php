<html>
 <title>Un test d''acces à la base</title> 
  <body background="fond9.jpg">
<br><br><br><br><br><br><br><br>
<table align="center"><tr><td colspan=2 align="center"><font color="red"><u><h1>Entrer les informations sur le produit à supprimer</h1></u></font></td></tr>
</table>
  
  <?php 
    require("getChamps.php");
	$tab=getChamps("produit","idproduit"); 
    $tab1=getChamps("produit","prixvente");
    ?>
<table align="center"><tr><td>
<form action="affichesupprimerproduit.php" method="post">  
 idproduit</td><td>
  <select name="date1"> 
  
  <?php
  while($ligne=mysql_fetch_row($tab))
    echo"<option  value=$ligne[0]>$ligne[0]</option>";
    echo "</select></td></tr>";
	?>	
  
	<tr><td colspan=2 align="right"><br><input type="submit" name="submit" value="supprimer"></td></tr>
	</form>
	</table>
   
  </body>
<html>











