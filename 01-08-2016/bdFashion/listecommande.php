<html>
 <title>Un test d''acces à la base</title>
  <body background="fond9.jpg">
  <?php 
  require("getChamps.php");
  $requet="select * from commande order by date desc";
  echo"<br><center><table border=2>";
  echo"<tr><td colspan=4 bgcolor="."white"."><marquee><font color="."red".">Commandes adressées à l'entreprise! </font></marquee></td></tr>";
	 echo"<tr bgcolor="."yellow".">
	     <td>idproduit</td>
		 <td>idclient</td>
		 <td>date</td>
		 <td>quantite</td>
		  		  
	     </tr> ";
	    affiche($requet);
   echo"</table></center>";
 
   ?>
   
  </body>
<html>











