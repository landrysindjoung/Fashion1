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
    
   $requet2 = "select sum(b)as m from benefice "; 
   $result2 = mysql_query($requet2);
   $t=mysql_fetch_row($result2);

   $requet3 = "SELECT sum(montant) from depenses  WHERE  date between '$d1' and '$d2'"; 
   $result3 = mysql_query($requet3);
     if(!$result3) echo"mal passé";
   $t1=mysql_fetch_row($result3);
   $gain=$t[0]-$t1[0];

   echo"<br><center><table border=2>
	     <tr><td colspan=3 align="."center".">bilan de la période</td></tr>
	     <tr bgcolor="."yellow"."><td>benefice brut</td>
	     <td>dépenses</td>
             <td>gain TDC </td>
	     </tr> 
	     <tr><td> $t[0] </td><td>$t1[0]</td><td>$gain</td></tr>
	     </table>";

   $req="drop view benefice";
   $po=mysql_query($req);
   
   ?>
   <br><br><br><div align="right"><a href="gainbrute.php"><blink>précédent</blink></a>	<br><br>
  </body>
</html>