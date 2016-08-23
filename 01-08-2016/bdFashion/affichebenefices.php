<html>
 <title>Un test d''acces à la base</title>
  <body background="fond9.jpg">
<?php
   require("getChamps.php");
   $tab=getChamps("vente","date"); 
   $tab1=getChamps("vente","date");
   $d1=date($_REQUEST['date1']);
   $d2=date($_REQUEST['date2']);

$requet = "create view benefice as(select (sum(v.montant)-p.prixEntree*sum(v.quantite))as b,p.idproduit
from vente as v,produit as p
where p.idproduit=v.idproduit and date between '$d1'and '$d2'
group by idproduit )"; 
$result = mysql_query($requet);
$requet1 ="select * from benefice";
$result1 = mysql_query($requet1);

     echo"<br><center><table border=2>";
	 echo"<tr bgcolor="."yellow"."><td>benefice par produit</td>
	      <td>idproduit</td>
	     </tr> ";
	if(!$result1)echo"impossible d'effectuer cette requete!";
	else
    affiche($requet1);
    
   $requet2 = "select sum(b)as m from benefice "; 
   $result2 = mysql_query($requet2);
   $t=mysql_fetch_row($result2);
   echo"<tr bgcolor="."white"."><td colspan=6>le montant des benefices pour cette periode est: $t[0]</td></td>";
   echo"</table></center>";

   $req="drop view benefice";
   $po=mysql_query($req);
   
   ?>
   <br><br><br><div align="right"><a href="gainbrute.php"><blink>précédent</blink></a>	<br><br>
  </body>
</html>