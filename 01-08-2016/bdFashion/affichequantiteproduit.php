<html>
 <title>Un test d''acces à la base</title>
  <body background="fond9.jpg">
<?php
   require("getChamps.php");
   $tab=getChamps("vente","date"); 
   $tab1=getChamps("vente","date");
   $d1=date($_REQUEST['date1']);
   $d2=date($_REQUEST['date2']);

$requet = "create view benefice as(select idproduit,sum(v.quantite)as q,sum(v.montant)as m
from vente as v 
where date between '$d1'and '$d2'
group by idproduit )"; 
$result = mysql_query($requet);
$requet1 ="select * from benefice";
$result1 = mysql_query($requet1);

     echo"<br><center><table border=2>";
	 echo"<tr bgcolor="."yellow"."><td>idproduit</td>
	      <td>quantité vendue</td>
	      <td>montant</td>
	     </tr> ";
	if(!$result1)echo"impossible d'effectuer cette requete!";
	else
    affiche($requet1);
    
   $req="drop view benefice";
   $po=mysql_query($req);
   
   ?>
   <br><br><br><div align="right"><a href="quantiteventeproduit.php"><blink>précédent</blink></a>	<br><br>
  </body>
</html>