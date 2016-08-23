<html>
 <title>Un test d''acces à la base</title>
  <body background="fond9.jpg">
  <br><br>
  <?php 
    
    require("getChamps.php");
 $tab=getChamps("Vente","date"); 
 $tab1=getChamps("Vente","date");   
   $date=getdate();
   $jour=$date['mday'];
   $moi=$date['mon'];
   $annee=$date['year'];
   $d1=date($_REQUEST['date1']);
   $r="select idproduit,idstock,dateperemtion from stock where dateperemtion between '$d1' and '$annee-$moi-$jour'";
   $result = mysql_query($r);
	 if(!$result)
	 echo"impossible d'effectuer cette requete!<br>";
	 else{
	 $lignee=mysql_fetch_row($result);
	 if(!$lignee[0])echo"Aucun produit à afficher";
	else{
	echo" <center><table border=5 whidth=80% >";
	echo"<tr> 
	    <td>idStock</td>
		<td>idProduit</td>
		<td>datePeremption</td>
		</tr>";
	   while($lignee){	 
	     echo"<tr><td>$lignee[1]</td>
		      <td>$lignee[0]</td>
	         <td>$lignee[2]</td></tr>";
		     $lignee=mysql_fetch_row($result);
	  }
	   echo"<tr><td colspan=3 bgcolor="."white"."><blink><font color="."blue" ."size=7><marquee direction="."left>"."Liste des  stocks proche de la peremtion</marquee></font><blink></td></tr></table></center>";
	   }
	 }
   ?>
   <br><br><br><div align="right"><a href="datePeremProche.php"><blink>précédent</blink></a>	<br><br>
  </body>
<html>











