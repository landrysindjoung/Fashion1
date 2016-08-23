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
   $resq="drop view tabll";
   $res=mysql_query($resq); 
  if($res)

   $r="create view tabll as select v.date as d, p.idproduit,sum(v.quantite)*p.prixSortie as m 
                            from vente as v,produit as p where (v.date between '$d1' and '$d2')
                            and v.idproduit=p.idproduit group by v.idproduit ";
   mysql_query($r);	
   $rr=getchamps2("tabll","idproduit,d,m")	 ;
   $requet="select sum(m) from tabll "; 	 
   $result = mysql_query($requet);
   if(!$result)
   echo"impossible d'effectuer cette requete!<br>";
   else{
   echo" <center><table border=5 cellspacing=3>";
   echo"<tr ><td colspan=3 bgcolor="."white"."><font color="."blue" ."size=7><marquee >
             "."Recettes journalières de la periode allant du $d1 au $d2</marquee></font></td></tr><tr> 
   <td>date</td>
   <td>id produit</td>
   <td>recette</td></tr>";
	   
          while($lignee=mysql_fetch_row($rr)){	 
	     echo"<tr><td>$lignee[0]</td>
                  <td>$lignee[1]</td>
	          <td>$lignee[2]</td></tr>";		
	  }

	  $lig=mysql_fetch_row($result);
	  echo"<tr><td colspan=3 bgcolor="."white"."><font color="."blue" ."size=7>
                "."La recette totale effectuée durant cette periode s'élève à: <font color="."tomato" ."size=10>
                 <blink>$lig[0]</blink></font></font></td></tr></table></center>";
	 }
   ?>
   <div align="right"><a href="montantvente.php"><blink>précédent</blink></a>
   </body>
<html>











