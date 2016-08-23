<html>
 <title>Un test d''acces à la base</title>
  <body background="fond9.jpg">
<br><br><br><br><br><br><br><br>
<table align="center"><tr><td colspan=2 align="center"><font color="red"><u><h1>Fiche de stock</h1></u></font></td></tr>
</table>

  <?php 
  require("getChamps.php");
  $requet="select * from stock order by idproduit ";
  echo"<center><table border=2>";
  echo"<tr><td colspan=7 bgcolor="."white"."><marquee><font color="."red"."><u>Stock présent au magasin!</u></font></marquee></td></tr>";
	 echo"<tr bgcolor="."yellow".">
	      <td>idstock</td>
		  <td>idproduit</td>
		  <td>quantité</td>
	     </tr> ";
	    affiche($requet);
   echo"</table></center>";
 
   ?>
    <?php 
   echo" <center><a href=\"manipulationVendeur.php\">RETOUR</a></center>";
   ?>
  </body>
<html>











