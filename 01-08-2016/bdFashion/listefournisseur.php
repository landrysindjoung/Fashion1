<html>
 <title>Un test d''acces à la base</title>
  <body background="fond9.jpg">
  <?php 
  require("getChamps.php");
  $requet="select * from fournisseur order by nom ";
  echo"<br><center><table border=2>";
  echo"<tr><td colspan=3 bgcolor="."white"."><marquee><font color="."red".">Fournisseurs de l'entreprise! </font></marquee></td></tr>";
	 echo"<tr bgcolor="."yellow".">
	      <td>idfournisseur</td>
	      <td>nom du fournisseur</td>
		  <td>adresse</td>		  		  
	     </tr> ";
	    affiche2($requet,3);
   echo"</table>";
   echo" <a href=\"manipulationVendeur.php\">RETOUR</a></center>";
 
   ?>
   
  </body>
<html>











