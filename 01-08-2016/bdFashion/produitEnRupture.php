<html>
 <title>Un test d''acces à la base</title>
  <body background="fond9.jpg">
  <br><br><br><br><br><br><br><br>
<table align="center"><tr><td colspan=2 align="center"><font color="red"><u><h1>Rupture de stock</h1></u></font></td></tr>
</table>

  <?php 
    require("getChamps.php");
    $requet="SELECT p.idproduit, quantite
             FROM `stock` AS s, `produit` AS p
             WHERE s.quantite <= p.quantitemin AND s.idproduit = p.idproduit"; 
    $result=mysql_query($requet);	
	if(!$result)echo"Aucun produit en rupture de stock!";
	else{
	echo"<center><table border=2>";
	echo"<tr><td colspan=2>";
	   echo"<font color="."blue" ."size=7><marquee direction="."left><blink>"."Produit en rupture de stock              </blink></marquee></font></td></tr>";
	   echo"<tr><td>identifiant du produit</td><td>quantité actuelle en stock</td></tr>";
   	   affiche($requet);  
echo"</center></table>";
	 }
   ?>
   	
	 <?php 
   echo" <center><a href=\"manipulationVendeur.php\">RETOUR</a></center>";
   ?>
  </body>
<html>











