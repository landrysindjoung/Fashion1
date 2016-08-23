<?php
 session_start();
   $dat=$_SESSION['dat'];
   $heur=$_SESSION['heur'];
   $idvendeur=$_SESSION['idvendeur'];
  
 ?>
<html><head><title>liens vers les tables</title></head>
  <body background="fond9.jpg"> <b><u>veuillez spécifier soigneusement le produit à supprimer</u><font color="red">
</font>
  <br><br>
<?php
  require("getChamps.php");
  $tab=getChamps3("vente","idproduit","date='$dat' and heure='$heur'");
  ?>
  <table><tr>
  <form action="affichesupprimerVenteVendeur.php" method="post"><br>
  <tr><td> identite du produit</td>
  <td><select name="idproduit">
  <?php
    while($ligne2=mysql_fetch_row($tab))
    echo"<option value=$ligne2[0]>$ligne2[0]</option>";
    echo "</select></td></tr>";	
  ?> 
<tr><td>
    
    <tr><td colspan=2 align="right"><input type="submit" name="submit" value="supprimer"></td></tr>
</form>
</table>    
	
	 
	 
  </font>
  </b></body>
</html>
