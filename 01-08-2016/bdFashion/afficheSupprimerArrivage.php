<html>
<head>
<title>supprimer un arrivage</title>
</head>

<body>
  
</font>
  
<?php   
 require("getChamps.php");
   $ids=$_REQUEST['idarrivage'];
   $n=($_REQUEST['idproduit']);
   $dat=($_REQUEST['date']);

   if($ids==" " || $n==" ")echo "<blink><font color=\"red\"size=5>veuillez prendre soin de bien remplir le formulaire<br> clicker sur precedent</font></blink>"; 
   else {
	  $cle="idarrivage='$ids' and idproduit='$n'and date='$dat'";   
      	
	  $t1="select quantite from `arrivages` where idarrivage='$ids' and idproduit='$n'and date='$dat'";
	  $re1= mysql_query($t1);
	  $b1=mysql_fetch_row($re1);
	  $f1=intval($b1[0]);

          supprimer($cle,"arrivages");

	  $t="select prixEntree,idFournisseur from `produit` where idproduit='$n'";
	  $re= mysql_query($t);
	  $b=mysql_fetch_row($re);
	  $f=intval($b[0]);
	  $t=$b[1]; echo"$f et $t";
	  $test1="update `fournisseur` set soldeCompte=soldeCompte - ($f*$f1)  where idFournisseur='$t'";
	  $re= mysql_query($test1);
	  $test="update `stock` set quantite=quantite- $f1 where idproduit='$n'";
	  $req= mysql_query($test);	  
	  if((!$test) or (!$re)) echo "imposssible";
	  else	  
	    echo "<blink><font color="."red"."size=3><br>clicker sur précédent pour effectuer une autre opération </font></blink>";  	 
	} 
	  
?>    	 
	
	 <br><br><br><div align="right"><a href="supprimerArrivage.php"><blink>précédent</blink></a>	<br><br>
	 
  </font>
  </b></body>

</html>