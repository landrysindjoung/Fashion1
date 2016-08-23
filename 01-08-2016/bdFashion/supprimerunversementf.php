<html>
 <title>Un test d''acces à la base</title>
  <body background="fond9.jpg">
  <u>Bien vouloir saisir les informations sur le versement</u><br>
  <?php 
    require("getChamps.php");
	$tab=getChamps("fournisseur","nom"); 
    $tab1=getChamps("fournisseur","idFournisseur");
    ?>


<form action="affichesupprimerunversementf.php" method="post">  
<br><tr><td>numvers:</td><td><input type="texte" name="numvers" value=""></td></tr>
 <br><br>
 </tr><tr><td>idFournisseur</td><td>
  <select name="idFournisseur"> 
  <?php
  while($ligne1=mysql_fetch_row($tab1))
    echo"<option  value=$ligne1[0]>$ligne1[0]</option>";
    echo "</select><br><br>";
  ?>	

  <tr><td>date de versement</td><td><select name="date1"> 	
 <?php
  $tab1=getChamps("versementf","date");
  while($ligne=mysql_fetch_row($tab1))
    echo"<option  value=$ligne[0]>$ligne[0]</option>";
    echo "</select><br>";
	
?>
	<center><input type="submit" name="submit" value="crediter"></center>
	</form>
  
  </body>
<html>











