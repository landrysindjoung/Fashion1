<html>
 <title>Un test d''acces à la base</title>
  <body background="fond9.jpg">
  <?php 
  require("getChamps.php");
  $requet="select * from versementf ";
  echo"<center><table border=2>";
  echo"<tr><td colspan=4 bgcolor="."white"."><marquee><font color="."red"."><u>versements effectués par les vendeurs</u></font></marquee></td></tr>";
	 echo"<tr bgcolor="."yellow".">
	      <td>numvers</td>
		  <td>date</td>
                  <td>montant</td>
                  <td>idfournisseur</td>
	     </tr> ";
	    affiche($requet);
   echo"</table></center>";
 
   ?>
   
  </body>
<html>











