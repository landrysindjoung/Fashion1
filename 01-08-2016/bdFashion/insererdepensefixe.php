<html>
 <title>Un test d''acces à la base</title>
  <body background="fond9.jpg">
  <br>
  <?php 
    require("getChamps.php");
    ?>
<table>
 <form action="afficheinsererdepensefixe.php" method="post"> 
<tr><td>idcoutfixe:</td><td><input type="texte" name="idcoutfixe" value="...">
</td><tr><td>nature:</td><td><input type="texte" name="nature" value="...">
</td><tr><td>montant:</td><td><input type="texte" name="montant" value="...">
</td></tr><tr><td colspan="2"align="right"><input type="submit" name="submit" value="inserer"></td></tr>
</form>	</table>	
   
  </body>
<html>











