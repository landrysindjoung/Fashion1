<html><head><title>Document sans titre</title></head>
  <body background="fond9.jpg"> 
<br><br><br><br><br><br><br><br>
<table><tr><td colspan=2 align="center"><font color="red"><u><h1>Spécifier soigneusement les valeurs à insérer!!</h1></u></font></td></tr>
</table>

<table align="center">
   <form action="afficheEnregistrerArrivage.php" method="post">   
    <tr><td>idproduit</td><td><select name="idproduit"> 
  <?php
   require("getChamps.php");
  $tab1=getChamps("produit","idproduit");
  while($ligne=mysql_fetch_row($tab1))
    echo"<option  value=$ligne[0]>$ligne[0]</option>";
    echo "</select><br>";
	?>
	</td></tr>
    <tr><td>idarrivage </td><td> <input type="text" name="idarrivage" > </td></tr> 
    <tr><td>quantité  </td><td> <input type="text" name="quantite" value="0" > </td></tr>    
    <tr><td colspan=2 align="right"><input type="submit" name="submit" value="inserer"></td></tr>
</form>
</table>
    
	
	 
	 
  </font>
  </b>
   <?php 
   echo" <center><a href=\"manipulationVendeur.php\">RETOUR</a></center>";
   ?>
  </body>
</html>