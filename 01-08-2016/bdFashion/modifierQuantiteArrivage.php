<html>
 <title>Un test d''acces à la base</title> 
  <body background="fond9.jpg">
  <u>Bien vouloir entrer les informations sur le produit</u><br><br><br>
  
  <?php 
    require("getChamps.php");
	$tab=getChamps("produit","idproduit"); 
    $tab1=getChamps("produit","prixvente");
    ?>
<table><tr><td>
<form action="affichemodifiePrixAchat.php" method="post">  
 idproduit</td><td>
  <select name="date1"> 
  
  <?php
  while($ligne=mysql_fetch_row($tab))
    echo"<option  value=$ligne[0]>$ligne[0]</option>";
    echo "</select></td></tr>";
	?>	
  
          <tr><td>nouveau prix d'achat</td>
          <td><input type="texte" name="prixVente" value="0"></td></tr>
          <tr><td>ancien prix d'achat</td>
          <td><input type="texte" name="ancienprixVente" value="0"></td></tr>

 <br><br>
          <tr><td colspan=2 align="right"><br><input type="submit" name="submit" value="modifier"></td></tr>
	</form>
   
	</table>
   
  </body>
<html>











