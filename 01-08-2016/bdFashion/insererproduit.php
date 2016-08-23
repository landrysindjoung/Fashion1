<html>
 <title>Un test d''acces à la base</title>
  <body background="fond9.jpg">
  <br><br><br><br><br><br><br><br>
<table align="center"><tr><td colspan=2 align="center"><font color="red"><u><h1>Entrer les informations sur le produit!!</h1></u></font></td></tr>
</table>
  <?php 
    require("getChamps.php");
	$tab1=getChamps("Fournisseur","idFournisseur"); 
	if(!$tab1)echo"mauvaise insertion";
   ?>
<table align="center"><tr><td>
 <form action="afficheinsererproduit.php" method="post"> 
 <tr><td>idProduit:</td><td><input type="texte" name="idProduit" value="..."></td></tr>
 <tr><td>nom du produit:</td><td><input type="texte" name="nomP" value="..."></td></tr>
 <tr><td>prix de sortie:</td><td><input type="texte" name="prixSortie" value="..."></td></tr>
 <tr><td>prix d'entrée:</td><td><input type="texte" name="prixEntree" value="..."></td></tr>
 <tr><td>quantité minimale:</td><td><input type="texte" name="quantmin" value="..."></td></tr>
 <tr><td>numero du stock:</td><td><input type="texte" name="idStock" value="..."></td></tr>

 <tr><td>idFournisseur</td><td><select name="idFournisseur">
 <?php
  while($ligne=mysql_fetch_row($tab1))
    echo"<option  value=$ligne[0]>$ligne[0]</option>";
    echo "</select></td></tr>";
    ?> 
 <tr><td>catégorie du produit</td><td><input type="texte" name="role" value="...">
  <tr><td colspan=2 align="right"><input type="submit" name="submit" value="inserer"></td></tr>
 	</form>
	</table>
	 <?php 
   echo" <center><a href=\"manipulationVendeur.php\">RETOUR</a></center>";
   ?>
		
  </body>
<html>











