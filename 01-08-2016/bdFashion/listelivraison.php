<html>
 <title>Un test d''acces à la base</title>
  <body background="fond9.jpg">
  <?php 
  require("getChamps.php");
  $requet="select * from livraison order by idproduit desc";
  echo"<br><center><table border=2 cellpadding=3>";
  echo"<tr><td colspan=5 bgcolor="."white"."><marquee><font color="."red".">Livraisons   effectuées! </font></marquee></td></tr>";
	 echo"<tr bgcolor="."yellow".">
	      <td>idfournisseur</td>
	      <td>idproduit</td>
		  		  
	     </tr> ";
	    affiche($requet);
   echo"</table></center>";
 
   ?>
   
   </body>
<html>











