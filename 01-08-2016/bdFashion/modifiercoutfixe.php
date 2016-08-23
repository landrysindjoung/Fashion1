<html>
 <title>Un test d''acces à la base</title>
  <body background="fond9.jpg">
  <br>
  <?php 
    require("getChamps.php");
    ?>
<table>
 <form action="affichemodifiercoutfixe.php" method="post"> 
<tr><td>idcoutfixe</td><td><select name="idcoutfixe">
 <?php
  $tab1=getChamps("coutfixe","idcoutfixe"); 
  while($ligne=mysql_fetch_row($tab1))
    echo"<option  value=$ligne[0]>$ligne[0]</option>";
    echo "</select></td></tr>";
    ?>
<tr><td>nouvel montant:</td><td><input type="texte" name="montant" value="..."></tr>
</td></tr><tr><td colspan="2"align="right"><input type="submit" name="submit" value="effectuer"></td></tr>
</form>	</table>	
   
  </body>
<html>











