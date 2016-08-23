<html>
<head>
<title>Document sans titre</title>
</head>

<body>
  
</font>
  
<?php   
 require("getChamps.php");
   $ids=$_REQUEST['idarrivage'];
   $n=($_REQUEST['idproduit']);
   $pa=doubleval($_REQUEST['quantite']);
   $date=getdate();
   $jour=$date['mday'];
   $moi=$date['mon'];
   $annee=$date['year'];
   $seconde=$date['seconds'];
   $minute=$date['minutes'];
   $heure=$date['hours'];

   if(($ids==" " || $n==" ")|| $pa==0)echo "<blink><font color=\"red\"size=5>veuillez prendre soin de bien remplir le formulaire<br> clicker sur precedent</font></blink>"; 
   else {
	  $tuple="'$ids','$n',$pa,'$annee-$moi-$jour'";   
          
    $requet="insert into arrivages values($tuple)";
   $result=mysql_query($requet);
   if(!$result) echo"Impossible d'insérer, cette arrivage pourrait déjà exister ";
   else{
          echo "<FONT color=\"red\"><h1><b>INSERTION REUSSIE</b></h1></font>";
          $t="select prixEntree,idFournisseur from `produit` where idproduit='$n'";
	  $re= mysql_query($t);
	  $b=mysql_fetch_row($re);
	  $f=intval($b[0]);
	  $t=$b[1]; echo"$f et $t";
	  $test1="update `fournisseur` set soldeCompte=soldeCompte + ($f*$pa)  where idFournisseur='$t'";
	  $re= mysql_query($test1);
	  $test="update `stock` set quantite=quantite+ $pa where idproduit='$n'";
	  $req= mysql_query($test);	  
	  if((!$test) or (!$re)) echo "imposssible";
	  else	  
	    echo "<blink><font color="."red"."size=3><br>clicker sur précédent pour effectuer une autre opération </font></blink>";  	 
	}
   } 
?>    	 
	
	 <br><br><br><div align="right"><a href="enregistrerArrivage.php"><blink>précédent</blink></a>	<br><br>
	 
  </font>
  </b></body>

</html>