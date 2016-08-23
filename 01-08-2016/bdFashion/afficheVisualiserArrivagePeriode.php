<html>
 <title>affichage des arrivages d'une période</title>
  <body background="fond9.jpg" >  
<?php
   require("getChamps.php");
   $tab=getChamps("Vente","date"); 
   $tab1=getChamps("Vente","date");
   $d1=date($_REQUEST['datedebut']);
   $d2=date($_REQUEST['datefin']);
   $requet = "select * from `arrivages`  where arrivages.date between '$d1' and '$d2' order by date asc"; 
   $result = mysql_query($requet);
     echo"<br><center><table border=2>";
	 echo"<tr bgcolor=\"white\"><td colspan=4 align=\"center\">liste des arrivages demandées</td></tr>";
	 echo"<tr bgcolor="."yellow".">
	      <td>idarrivage</td>
		  <td>idproduit</td>
		  <td>quantite</td>
		  <td>date</td>
	     </tr> ";
	if(!$result)echo"impossible d'effectuer cette requete!";
	else
    affiche($requet);
   echo"</table></center>";
   ?>
   <br><br><br><div align="right"><a href="visualiserArrivagePeriode.php"><blink>précédent</blink></a>	<br><br>
    
  </body>
</html>