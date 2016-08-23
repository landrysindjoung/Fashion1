<html><head><title>liens vers les tables</title></head>
<br><br><br><br><br><br><br><br>  
<body background="fond9.jpg"> 
<table align="center"><tr><td colspan=2 align="center"><font color="red"><u><h1>Spécifier soigneusement la vente à supprimer</h1></u></font></td></tr>
</table>

  
<?php
  require("getChamps.php");
  $tab=getChamps("vente","idproduit");
  $table=getChamps("vente","heure");
  $tabl=getChamps("vente","date");
  ?>
  
  <table align="center"><tr>
  <form action="affichesupprimerVente.php" method="post"><br>
  <tr><td> identite du produit</td>
  <td align="right"><select name="idproduit">
  <?php
    while($ligne2=mysql_fetch_row($tab))
    echo"<option value=$ligne2[0]>$ligne2[0]</option>";
    echo "</select></td></tr>";	
  ?> 

  <tr><td>date</td>
  <td align="right"><select name="date"> 
  <?php
  while($ligne=mysql_fetch_row($tabl))
    echo"<option  value=$ligne[0]>$ligne[0]</option>";
    echo "</select></td></tr>";
	?>
	<tr><td>heure</td>
	<td align="right"><select name="heure"> 
  <?php
  while($ligne1=mysql_fetch_row($table))
    echo"<option  value=$ligne1[0]>$ligne1[0]</option>";
    echo "</select></td></tr>";
	?>
    <tr><td colspan=2 align="right"><input type="submit" name="submit" value="supprimer"></td></tr>
</form>
</table>    
	
	 
	 
  </font>
  </b></body>
</html>