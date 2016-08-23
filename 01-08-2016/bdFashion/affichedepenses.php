<html>
 <title>Un test d''acces à la base</title>
  <body background="fond9.jpg">
<?php
   require("getChamps.php");
   $tab=getChamps("depenses","date"); 
   $tab1=getChamps("depenses","date");
   $d1=date($_REQUEST['date1']);
   $d2=date($_REQUEST['date2']);

$requet ="select * from depenses where date between '$d1'and '$d2'";
$result = mysql_query($requet);

     echo"<br><center><table border=2>";
	 echo"<tr bgcolor="."yellow"."><td>iddepense</td>
	      <td>nature</td>
		<td>montant</td>
		<td>date</td>
	     </tr> ";
	if(!$result)echo"impossible d'effectuer cette requete!";
	else
    affiche($requet);
    
   $requet1 = "select sum(montant)as m from depenses  where depenses.date between '$d1' and '$d2' order by date asc"; 
   $result1 = mysql_query($requet1);
   $t=mysql_fetch_row($result1);
   echo"<tr bgcolor="."white"."><td colspan=6>le montant des depenses pour cette periode est: $t[0]</td></td>";
   echo"</table></center>";
   ?>
   <br><br><br><div align="right"><a href="visualiserdepenses.php"><blink>précédent</blink></a>	<br><br>
  </body>
</html>