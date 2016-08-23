<html>
 <title>Un test d''acces à la base</title>
  <body background="fond9.jpg">
<?php
   require("getChamps.php");
   
   $requet = "select * from coutfixe "; 
   $result = mysql_query($requet);
     echo"<br><center><table border=2>";
	 echo"<tr bgcolor="."yellow"."><td>idcoutfixe</td>
	      <td>nature</td>
	      <td>montant</td>
	     </tr> ";
	if(!$result)echo"impossible d'effectuer cette requete!";
	else
    affiche($requet);
   echo"</table></center>";
   ?>
  </body>
</html>