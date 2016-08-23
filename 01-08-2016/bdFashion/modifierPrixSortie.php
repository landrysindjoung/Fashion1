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
  $tab=getChamps("produit","idproduit"); 
  ?>
  <form action="afficheModifierPrixSorti.php" method="post">    
  <?php
   echo "<tr><td>identite du produit  </td> ";
   ?>
  <td><select name="idproduit"> 
  <?php
  while($ligne=mysql_fetch_row($tab))
    echo"<option  value=$ligne[0]>$ligne[0]</option>";
    echo "</select></td></tr>";
	?>
    <tr><td>ancien prix de sortie</td>   <td><input type="text" name="ancien" value="0" ></td></tr>         
    <tr><td>nouveau prix de sortie</td>   <td><input type="text" name="nouveau1" value="0" ></td></tr>          
    <tr><td>confirmer nouveau prix de sortie</td>   <td><input type="text" name="nouveau2" value="0" ></td></tr>          
    <tr><td colspan=2 align="right"><input type="submit" name="submit" value="modifier"></td></tr>
</form>
</table>	 
  </font>
  </b></body>
</html>