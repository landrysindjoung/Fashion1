<html>
 <title>Un test d''acces à la base</title>
  <body background="fond9.jpg">
  <br><br><br><br><br><br><br><br>
<table><tr><td colspan=2 align="center"><font color="red"><u><h1>Entrer les informations sur le fournisseur!!</h1></u></font></td></tr>
</table>
  <?php 
    require("getChamps.php");
	$tab=getChamps("fournisseur","idfournisseur"); 
    $tab1=getChamps("fournisseur","nom");
    ?>
<table align="center">
<form action="affichesupprimerfournisseur.php" method="post">  
 <tr><td>idfournisseur:</td><td>
  <select name="idfournisseur"> 
  
  <?php
  while($ligne=mysql_fetch_row($tab))
    echo"<option  value=$ligne[0]>$ligne[0]</option>";
    echo "</select></td><td>";
	?>
	</td></tr>
    <tr><td>nom:</td><td>  
	<select name="nom"> 
  <?php
  while($ligne1=mysql_fetch_row($tab1))
    echo"<option  value=$ligne1[0]>$ligne1[0]</option>";
    echo "</select></td><td>";
	?>
	</td></tr><tr><td colspan="2" align="right"><input type="submit" name="submit" value="supprimer"></td></tr>
	</form>
	
   
  </body>
<html>











