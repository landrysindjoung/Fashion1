<html>
 <title>Un test d''acces à la base</title>
  <body background="fond9.jpg">
<?php
   require("getChamps.php");
   $tab=getChamps("Vente","date"); 
   $tab1=getChamps("Vente","date");
   $d1=date($_REQUEST['date1']);
   $d2=date($_REQUEST['date2']);
   $requet = "select * from Vente  where vente.date between '$d1' and '$d2' order by date asc"; 
   $result = mysql_query($requet);
     echo"<br><center><table border=2>";
	 echo"<tr bgcolor="."tomato"."><td>idproduit</td>
	      <td>idclient</td>
		  <td>quantité</td>
		  <td>prix</td>
		  <td>date</td>
		  <td>remise</td>
		  <td>heure</td>
	     </tr> ";
	if(!$result)echo"impossible d'effectuer cette requete!";
	else
    affiche($requet);
   echo"</table></center>";
   ?>
   <br><br><br><div align="right"><a href="vente.php"><blink>précédent</blink></a>	<br><br>
  </body>
</html>