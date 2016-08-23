<html><head><title>visualiser les arrivages d'une période</title></head>
  <body background="fond9.jpg"> 
<br><br><br><br><br><br><br><br>
<table align="center"><tr><td colspan=2><font color="red"><u><h1>Spécifier soigneusement la période!!</h1></u></font></td></tr>
</table>

<table align="center">
   <form action="afficheVisualiserArrivagePeriode.php" method="post">   
    <tr><td>date de debut</td><td><select name="datedebut"> 
  <?php
   require("getChamps.php");
  $tab1=getChamps("arrivages","date");
  $tab2=$tab1;
  while($ligne=mysql_fetch_row($tab1))
    echo"<option  value=$ligne[0]>$ligne[0]</option>";
    echo "</select><br>";
	echo"</td></tr>";
	echo"<tr><td>date de fin</td><td><select name=\"datefin\"> ";
  
  $tab1=getChamps("arrivages","date");
  while($ligne=mysql_fetch_row($tab1))
    echo"<option  value=$ligne[0]>$ligne[0]</option>";
    echo "</select><br>";
	echo"</td></tr>";
  
	?>
    <tr><td colspan=2 align="right"><input type="submit" name="submit" value="visualiser"></td></tr>
</form>
</table>
    
	
	 
	 
  </font>
  </b>
   <?php 
   echo" <center><a href=\"manipulationVendeur.php\">RETOUR</a></center>";
   ?>
  </body>
</html>