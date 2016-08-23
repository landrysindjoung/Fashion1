<html>
 <title>Un test d''acces à la base</title>
  <body background="fond9.jpg">
  <br><br>
  <?php 
    require("getChamps.php");
 $tab=getChamps("livraison","idproduit"); 
   ?>

 <form action="affichefournisseurprod.php" method="post"> 
  idproduit:<br>
  <select name="idproduit"> 
<?php
  while($ligne=mysql_fetch_row($tab))
    echo"<option  value=$ligne[0]>$ligne[0]</option>";
    echo "</select><br><br>";
	?>
<center><input type="submit" name="submit" value="rechercher"></center>
	</form>   
   
  </body>
</html>











