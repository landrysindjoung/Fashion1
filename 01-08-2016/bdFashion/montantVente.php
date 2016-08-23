<html>
 <title>Un test d''acces à la base</title>
  <body background="fond9.jpg">
  <?php    
    require("getChamps.php");
 $tab=getChamps("Vente","date"); 
 $tab1=getChamps("Vente","date");
   ?>
  veuillez specifier l'intervalle de temps
 <form action="affichemontantVente.php" method="post"><br>     
  date initiale<br>
  <select name="date1"> 
  <?php
  while($ligne=mysql_fetch_row($tab))
    echo"<option  value=$ligne[0]>$ligne[0]</option>";
    echo "</select><br><br>";
	?>
	<br>
	date de fin<br>
	<select name="date2"> 
  <?php
  while($ligne1=mysql_fetch_row($tab1))
    echo"<option  value=$ligne1[0]>$ligne1[0]</option>";
    echo "</select><br><br>";
	?>
    
    <center><input type="submit" name="submit" value="afficher"></center>
</form>
   
  </body>
<html>











