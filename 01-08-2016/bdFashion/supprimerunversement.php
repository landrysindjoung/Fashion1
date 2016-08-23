<html>
 <title>Un test d''acces à la base</title>
  <body background="fond9.jpg">
  <u>Bien vouloir saisir les informations sur le versement</u><br>
  <?php 
    require("getChamps.php");
	$tab=getChamps("vendeur","nom"); 
    $tab1=getChamps("vendeur","idvendeur");
    ?>


<form action="affichesupprimerunversement.php" method="post">  
<br><tr><td>idversement:</td><td><input type="texte" name="idversement" value=""></td></tr>
 <br><br>
 </tr><tr><td>idvendeur</td><td>
  <select name="idvendeur"> 
  <?php
  while($ligne1=mysql_fetch_row($tab1))
    echo"<option  value=$ligne1[0]>$ligne1[0]</option>";
    echo "</select><br><br>";
  ?>	

  <tr><td>date de versement</td><td><select name="date1"> 	
 <?php
  $tab1=getChamps("versementv","date");
  while($ligne=mysql_fetch_row($tab1))
    echo"<option  value=$ligne[0]>$ligne[0]</option>";
    echo "</select><br>";
	
?>
	<center><input type="submit" name="submit" value="crediter"></center>
	</form>
   <br><div align="right"><a href="effectuerunversement.php"><blink>précédent</blink></a>	
  </body>
<html>











