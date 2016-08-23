<html>
 <title>Un test d''acces à la base</title>
  <body background="fond9.jpg">
  <?php 
  require("getChamps.php");
  $requet="select * from client ";
  echo"<br><center><table border=2 cellpadding=3>";
  echo"<tr><td colspan=5 bgcolor="."white"."><marquee><font color="."red".">Client present dans la liste! </font></marquee></td></tr>";
	 echo"<tr bgcolor="."yellow".">
	      <td>nom du client</td>
	      <td>idclient</td>
	      <td>nom du vendeur</td>
	      <td>montant du compte</td>
	      <td>adresse</td>
		  
	     </tr> ";
	    affiche($requet);
   echo"</table></center>";
 
   ?>
   
  </body>
<html>











