<html>
 <title>Un test d''acces � la base</title>
  <body background="fond9.jpg">
  <?php 
  require("getChamps.php");
   $date=getdate();
   $jour=$date['mday'];
   $moi=$date['mon'];
   $annee=$date['year'];
  $requet="select * from stock where dateperemtion<'$annee-$moi-$jour'";
  echo"<center><table border=2>";
  echo"<tr><td colspan=7 bgcolor="."white"."><marquee><font color="."red".">Stock p�rim�s au magasin! </font></marquee></td></tr>";
	 echo"<tr bgcolor="."yellow".">
	      <td>idstock</td>
		  <td>idproduit</td>
		  <td>quantit�</td>
		  <td>prixunitaire</td>
		  <td>prixachat</td>
		  <td>datearriv�e</td>
		  <td>dateperemtion</td>
	     </tr> ";
	    affiche($requet);
   echo"</table></center>";
   
   ?>
   
  </body>
<html>











