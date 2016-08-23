<html>
 <title>Un test d''acces à la base</title>
  <body background="fond9.jpg">
  <?php 
  require("getChamps.php");
   $date=getdate();
   $jour=$date['mday'];
   $moi=$date['mon'];
   $annee=$date['year'];
  $requet="select * from stock where dateperemtion<'$annee-$moi-$jour'";
  echo"<center><table border=2>";
  echo"<tr><td colspan=7 bgcolor="."white"."><marquee><font color="."red".">Stock périmés au magasin! </font></marquee></td></tr>";
	 echo"<tr bgcolor="."yellow".">
	      <td>idstock</td>
		  <td>idproduit</td>
		  <td>quantité</td>
		  <td>prixunitaire</td>
		  <td>prixachat</td>
		  <td>datearrivée</td>
		  <td>dateperemtion</td>
	     </tr> ";
	    affiche($requet);
   echo"</table></center>";
   
   ?>
   
  </body>
<html>











