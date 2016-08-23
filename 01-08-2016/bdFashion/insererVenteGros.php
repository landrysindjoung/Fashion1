<html><head><title>liens vers les tables</title></head>
  <body background="fond9.jpg">   
<br><br><br><br><br><br><br><br>  
<table align="center"><tr><td colspan=2 align="center"><font color="red"><u><h1>Spécifier soigneusement les valeurs à insérer</h1></u></font></td></tr>
</table>
 
  
</font>
  <br><br>
  <table align="center">
<?php   
  require("getChamps.php");
  $tab=getChamps("stock","idproduit"); 
  $table=getChamps("vendeur","idvendeur");
  echo "<tr><td>identite du vendeur </td> ";
  ?>
  <form action="afficheinsererVenteGros.php" method="post">    
  <td><select name="idvendeur"> 
  <option value="">...</option>"
  <?php
    while($ligne1=mysql_fetch_row($table))
    echo"<option value=$ligne1[0]>$ligne1[0]</option>";
    echo "</select></td></tr>";	
  echo "<tr><td>identite du produit  </td> ";
   ?>  
  <td><select name="idproduit"> 
  <?php
  while($ligne=mysql_fetch_row($tab))
    echo"<option  value=$ligne[0]>$ligne[0]</option>";
    echo "</select></td></tr>";
	?>
    <tr><td>quantité</td>   <td><input type="text" name="quantité" value="0" ></td></tr>         
    <tr><td>prix de vente unitaire</td>   <td><input type="text" name="montant" value="0" ></td></tr>          
    <tr><td colspan=2 align="right"><input type="submit" name="submit" value="inserer"></td></tr>
</form>
</table>	 
  </font>
  </b></body>
</html>