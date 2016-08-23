<html>
 <title>Un test d''acces à la base</title>
  <body background="fond9.jpg">
 <br><br><br><br><br><br><br><br>
<table align="center"><tr><td colspan=2 align="center"><font color="red"><u><h1>client dont vous voulez avoir la trace des operations</h1></u></font></td></tr>
</table>

  <?php 
    require("getChamps.php");
	$tab=getChamps("produit","nomP"); 
    $tab1=getChamps("produit","idproduit");
    ?>
<table align="center"><tr><td> 
<form action="affichetraceoperationproduit.php" method="post">  
 nom du produit </td><td align="right">
  <select name="nom"> 
  
  <?php
  while($ligne=mysql_fetch_row($tab))
    echo"<option  value=$ligne[0]>$ligne[0]</option>";
    echo "</select><br><br>";
	?>
 </td></tr><tr><td>idproduit</td><td align="right">
  <select name="idproduit"> 
  <?php
  while($ligne1=mysql_fetch_row($tab1))
    echo"<option  value=$ligne1[0]>$ligne1[0]</option>";
    //echo "</select><br><br>";
	?>
      </td></tr><tr><td colspan=2 align="right"><input type="submit" name="submit" value="visualiser">
	</td></tr></form></table>
  </body>
<html>











