<html>
 <title>affichage des versements d'une période</title>
  <body background="fond9.jpg" >  
<?php
   require("getChamps.php");
   $tab=getChamps("versementv","date"); 
   $tab1=getChamps("versementv","date");
   $d1=date($_REQUEST['date1']);
   $d2=date($_REQUEST['date2']);
   $idv=$_REQUEST['idvendeur'];

   $requet = "select * from versementv  where idvendeur='$idv' and versementv.date between '$d1' and '$d2' order by date asc"; 
   $result = mysql_query($requet);

   if(!$result)echo"impossible d'effectuer cette requete!";
   else{
    echo"<br><center><table border=2>";
	 echo"<tr bgcolor=\"white\"><td colspan=4 align=\"center\">liste des arrivages demandées</td></tr>";
	 echo"<tr bgcolor="."yellow".">
	      <td>idversement</td>
		  <td>idvendeur</td>
		  <td>date</td>
		  <td>montant</td>
	     </tr> ";
    affiche($requet);
   echo"</table></center>";
   }
   ?>
   <br><br><br><div align="right"><a href="visualiserversement.php"><blink>précédent</blink></a>	<br><br>
  </body>
</html>