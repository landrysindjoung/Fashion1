<html>
 <title>Un test d''acces à la base</title>
  <body background="fond9.jpg">
  <br><br><br><br><br><br><br><br>  
<table align="center"><tr><td colspan=2 align="center"><font color="red"><u><h1>Spécifier soigneusement la période</h1></u></font></td></tr>
</table>
  <?php require("getChamps.php");
 $tab=getChamps("Vente","date"); 
 $tab1=getChamps("Vente","date");
    
   ?>

 <form action="afficheventecoutmax.php" method="post">  
 date debut<br>
  <select name="date1"> 
  
  <?php
  while($ligne=mysql_fetch_row($tab))
    echo"<option  value=$ligne[0]>$ligne[0]</option>";
    echo "</select><br>";
	?>
	<br>
	date de fin<br>
	<select name="date2"> 
  <?php
  while($ligne1=mysql_fetch_row($tab1))
    echo"<option  value=$ligne1[0]>$ligne1[0]</option>";
    echo "</select><br>";
	?>
	<center><input type="submit" name="submit" value="rechercher"></center>
	</form>
   
  </body>
<html>











