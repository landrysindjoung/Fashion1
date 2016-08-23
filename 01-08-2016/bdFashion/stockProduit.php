<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title> quantite en stock d'un produit</title>
</head>
<body background="fond9.jpg">
<br><br><br><br><br><br><br><br>
<table align="center"><tr><td colspan=2 align="center"><font color="red"><u><h1>selectionner le produit en question </h1></u></font></td></tr>
</table>
 <?php
    require("getChamps.php");
	$tab1=getChamps("produit","idproduit"); 
	if(!$tab1)echo "mauvaise recherche";
	?>
  <table align="center">
  <form  method="post" action="afficheStockProduit.php"> 

  <tr><td>identifiant du produit</td><td><select name="idproduit">
  <?php
  while($ligne=mysql_fetch_row($tab1))
    echo"<option  value=$ligne[0]>$ligne[0]</option>";
    echo "</select></td></tr>";
    ?> 
   <tr> <td colspan=2 align="right"> <input name="submit" type="submit" value="afficher"> </td></tr>
   </table>
   
    <?php 
   echo" <center><a href=\"manipulationVendeur.php\">RETOUR</a></center>";
   ?>
</body>
</html>
