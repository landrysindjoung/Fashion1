<html>
 <title>Un test d''acces � la base</title>
  <body background="fond9.jpg">
  <?php 
  require("getChamps.php");
  $requet="select * from versementv ";
  echo"<center><table border=2>";
  echo"<tr><td colspan=4 bgcolor="."white"."><marquee><font color="."red"."><u>versements effectu�s par les vendeurs</u></font></marquee></td></tr>";
	 echo"<tr bgcolor="."yellow".">
	      <td>idversement</td>
		  <td>idvendeur</td>
		  <td>date</td>
                  <td>montant</td>
	     </tr> ";
	    affiche($requet);
   echo"</table></center>";
 
   ?>
   
  </body>
<html>











