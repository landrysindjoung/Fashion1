<html>
 <title>Un test d''acces à la base</title>
  <body background="fond9.jpg">
  <br><br>
  
   <?php   
   require("getChamps.php");
 $tab=getChamps("Vente","date"); 
 $tab1=getChamps("Vente","date");
   $d1=date($_REQUEST['date1']);
   $d2=date($_REQUEST['date2']);

    $resq1="drop view tabl1";
   $res1=mysql_query($resq1); 
   $r1="create view tabl1 as select v.date as d, p.idproduit,v.quantite,sum(v.quantite)*p.prixSortie as m 
                            from vente as v,produit as p where (v.date between '$d1' and '$d2')
                            and v.idproduit=p.idproduit group by v.idproduit ";
   $resu=mysql_query($r1);
   if(!$resu)
    echo"impossible faites moi signe<br>";
    else{
			 
      $requet="select idproduit,quantite, m,avg(m) as a from tabl1 where m>a order by m"; 	 
      $result = mysql_query($requet);
      if(!$result)
	 echo"pas encore implementer revoir la requette!<br>";
	 else{
	    echo" <center><table border=5 whidth=80% >";
	    echo"<tr> 
	    <td>idproduit</td>
            <td>quantite </td>
	    <td>montant vendu</td></tr>";

	    while($lignee=mysql_fetch_row($result)){	 	 
	       echo"<tr><td>$lignee[0]</td>
                    <td>$lignee[1]</td>
	            <td>$lignee[2]</td></tr>";		
	    }
	 
	    echo"<tr><td colspan=3 bgcolor="."white"."><font color="."blue" ."size=7>
                <marquee direction="."left>"."ces produits se situent au dessus de la moyenne
                </marquee></font></td></tr></table></center>";
          }
      }
   $resq1="drop view tabl1";
   $res1=mysql_query($resq1); 
   ?>
   <div align="right"><a href="marchandisePlusVendue.php"><blink>précédent</blink></a>	
  </body>
<html>











