<html>
 <title>Un test d''acces à la base</title>
  <body background="fond9.jpg">
<table align="center"><tr><td colspan=2 align="center"><font color="red"><u><h1>Liste employés</h1></u></font></td></tr>
</table>
  <?php 
  require("getChamps.php");
  $requet="select * from vendeur order by nom ";
  echo"<br><center><table border=2>";
  echo"<tr><td colspan=5 bgcolor="."white"."><marquee><font color="."red".">Vendeurs presents dans la Fche! </font></marquee></td></tr>";
  echo"<tr bgcolor="."yellow".">
	      <td>identite du vendeur</td>
	      <td>nom & prenom</td>
		  <td>etat du compte</td>
		  <td>adresse</td>		  
	     </tr> ";
	    affiche($requet);
   echo"</table></center>";
   ?>
   
   
  </body>
<html>











