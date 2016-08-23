<html>
 <title>Un test d''acces à la base</title>
  <body background="fond9.jpg">
<?php
   require("getChamps.php");
   $tab=getChamps("facture","date"); 
   $tab1=getChamps("facture","date");
   $d1=date($_REQUEST['date1']);
   $d2=date($_REQUEST['date2']);
   $requet = "select * from facture  where facture.date between '$d1' and '$d2' order by idfacture"; 
   $result = mysql_query($requet);
     echo"<br><center><table border=2>";
	 echo"<tr bgcolor="."yellow"."><td>idfacture</td>
	      <td>date</td>
		  <td>heure</td>
		  <td>Nom du client</td>
		  <td>Nom du vendeur</td>
		 </tr> ";
	if(!$result)echo"impossible d'effectuer cette requete!";
	else
    affiche($requet);
    
//  requet1 = "select sum(montant)as m from vente  where //vente.date between '$d1' and '$d2' order by date asc"; 
//   $result1 = mysql_query($requet1);
//   $t=mysql_fetch_row($result1);
//   echo"<tr bgcolor="."white"."><td colspan=6>le montant des ventes pour cette periode est: $t[0]</td></td>";
//   echo"</table></center>";
 //  ?>
   <br><br><br><div align="right"><a href="listeFactures.php"><blink>précédent</blink></a>	<br><br>
  </body>
</html>