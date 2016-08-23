<html><head><title>Un test d''acces à la base</title></head>
  <body background="fond9.jpg"> <b><u>veuillez spécifier soigneusement les valeurs à insérer</u><font color="red">  <br> <br><br>
  
</font>
  
<?php   
 require("getChamps.php");
  $tab=getChamps("produit","idproduit"); 
  
  ?>
  <table><tr><td>
   idproduit </td>
  <form action="afficheinsererStock.php" method="post">   
  <td><select name="idproduit">
<?php
    while($ligne1=mysql_fetch_row($tab))
    echo"<option value=$ligne1[0]>$ligne1[0]</option>";
    echo "</select></td></tr>";	
?>
   <tr><td>idstock</td><td>   <input type="text" name="idstock" > </td></tr>
    <tr><td>quantité  </td><td> <input type="text" name="quantité" value="0" > </td></tr>    
    <tr><td>prix d'achat</td><td>   <input type="text" name="prixachat" value="0" > </td></tr>   
    <tr><td>date péremtion  </td><td>  <input type="text" name="dateperemtion" value="0"> </td></tr>  
    <tr><td colspan=2 align="right"><input type="submit" name="submit" value="inserer"></td></tr>
</form>
</table>
    
	
	 
	 
  </font>
  </b></body>
</html>