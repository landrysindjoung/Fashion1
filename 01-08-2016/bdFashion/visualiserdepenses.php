<html>
 <title>Un test d''acces à la base</title>
  <body background="fond9.jpg">
   <?php  
   //...............................................................................Partie principale du code..........................................
   require("getChamps.php");
 $tab=getChamps("depenses","date"); 
 $tab1=getChamps("depenses","date");
 ?>
 <form action="affichedepenses.php" method="post">    
  Intervalle de temps des depenses 
   <br><br>
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
    echo "</select><br>";
	?>
    
    <center><input type="submit" name="submit" value="afficher"></center>
</form>  </body>
</html>