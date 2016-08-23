<html>
 <title>Un test d''acces à la base</title>
  <body background="fond9.jpg">
  <br><br>
  <?php 
    /*$con=mysql_connect("127.0.0.1","root","");
   if(!$con){echo "impossible de se conncter à la base";}
   mysql_select_db("projetin3");*/
    require("getChamps.php");
 $tab=getChamps("Vente","date"); 
 $tab1=getChamps("Vente","date");
   ?>
  veuillez specifier l'intervalle de temps
 <form action="listeVentes.php" method="post"><br>    
  Intervalle de temps des ventes  
   <br><br>
  date initiale<br>
  <select name="date1"> 
  <?php
  while($ligne=mysql_fetch_row($tab))
    echo"<option  value=$ligne[0]>$ligne[0]</option>";
    echo "</select><br><br>";
	?>
	<br>
	date de fin<br>
	<select name="date2"> 
  <?php
  while($ligne1=mysql_fetch_row($tab1))
    echo"<option  value=$ligne1[0]>$ligne1[0]</option>";
    echo "</select><br><br>";
	?>
    
    <center><input type="submit" name="submit" value="afficher"></center>
</form>
   <?php   
   $d1=date($_REQUEST['date1']);
   $d2=date($_REQUEST['date2']);
   $resq="drop view tabll";
   $res=mysql_query($resq);
   //echo"la date est:$d<br>";
 // if($res)
  //echo"suppression réussi";
   $r="create view tabll as(select idproduit,sum(quantite) as m from vente where vente.date between '$d1' and '$d2' group by idproduit having idclient<>'...')";
	 mysql_query($r);			 
     $requet="select idproduit,m from tabll having m >= all(select m from tabll)"; 	 
     $result = mysql_query($requet);
	 if(!$result)
	 echo"impossible d'effectuer cette requete!<br>";
	 else{
	echo" <center><table border=5 whidth=80% >";
	echo"<tr> 
	    <td>nom</td>
		<td>prix unitaire</td>
		</tr>";
	   while($lignee=mysql_fetch_row($result)){	 
	   echo"<tr>";
	    $id=$lignee[0];
	    $requet1="select * from produit where idproduit='$id'";
	    $result1 = mysql_query($requet1);
	    $ligne1=mysql_fetch_row($result1);
	 	echo"<td>$ligne1[0]</td>
	         <td>$ligne1[1]</td></tr>";
		$quantite=$lignee[1];
	  }
	   echo"<tr><td colspan=3 bgcolor="."white"."><font color="."blue" ."size=7><marquee direction="."left>"."la quantite de $id achetée s'élève à: $quantite</marquee></font></td></tr></table></center>";
	 }
   ?>
   <br><br><br><div align="right"><a href="vente.php"><blink>précédent</blink></a>	<br><br>
  </body>
<html>











