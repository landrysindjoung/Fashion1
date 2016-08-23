<html><head><title>supprimer un arrivage</title></head>
  <body background="fond9.jpg"> 
<br><br><br><br><br><br><br><br>
<table align="center"><tr><td colspan=2><font color="red"><u><h1>Spécifier les paramètres à supprimer!!</h1></u></font></td></tr>
</table>

<table align="center">
   <form action="afficheSupprimerArrivage.php" method="post">   
    <tr><td>idproduit</td><td align="right"><select name="idproduit"> 
  <?php
   require("getChamps.php");
  $tab1=getChamps("produit","idproduit");
  $tab=getChamps("arrivages","date");
  $tab2=getChamps("arrivages","idarrivage");

  while($ligne=mysql_fetch_row($tab1))
    echo"<option  value=$ligne[0]>$ligne[0]</option>";
    echo "</select><br>";
	?>
	</td></tr>
   <tr><td>idarrivage</td>
  <td align="right"><select name="idarrivage"> 
  <?php
  while($ligne=mysql_fetch_row($tab2))
    echo"<option  value=$ligne[0]>$ligne[0]</option>";
    echo "</select></td></tr>";
	?> 

  <tr><td>date</td>
  <td align="right"><select name="date"> 
  <?php
  while($ligne=mysql_fetch_row($tab))
    echo"<option  value=$ligne[0]>$ligne[0]</option>";
    echo "</select></td></tr>";
	?>
    <tr><td colspan=2 align="right"><input type="submit" name="submit" value="supprimer"></td></tr>
</form>
</table>
    
	
	 
	 
  </font>
  </b></body>
</html>