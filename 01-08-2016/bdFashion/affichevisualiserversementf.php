<html>
 <title>affichage des versements d'une période</title>
  <body background="fond9.jpg" >  
<?php
   require("getChamps.php");
   $tab=getChamps("versementf","date"); 
   $tab1=getChamps("versementf","date");
   $d1=date($_REQUEST['date1']);
   $d2=date($_REQUEST['date2']);
   $idv=$_REQUEST['idFournisseur'];

   $requet = "select * from versementf  where idFournisseur='$idv' and versementf.date between '$d1' and '$d2' order by date asc"; 
   $result = mysql_query($requet);

   if(!$result)echo"impossible d'effectuer cette requete!";
   else{
    echo"<br><center><table border=2>";
	 echo"<tr bgcolor=\"white\"><td colspan=4 align=\"center\">liste des versements demandées</td></tr>";
	 echo"<tr bgcolor="."yellow".">
	      <td>numvers</td>		  
		  <td>date</td>
		  <td>montant</td>
                  <td>idFournisseur</td>
	     </tr> ";
    affiche($requet);
   echo"</table></center>";
   }
   ?>
   <br><br><br><div align="right"><a href="visualiserversementf.php"><blink>précédent</blink></a>	<br><br>
  </body>
</html>