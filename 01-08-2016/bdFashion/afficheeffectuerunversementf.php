<html><head><title>liens vers les tables</title></head>
  <body background="fond9.jpg"> <font color="red">    
  
</font>
  <br><br>
<?php   
  require("getChamps.php");
  $date=getdate();
  $jour=$date['mday'];
  $moi=$date['mon'];
  $annee=$date['year'];
  $seconde=$date['seconds'];
  $minute=$date['minutes'];
  $heure=$date['hours'];   
         
  
  $m=doubleval($_REQUEST['montant']);
  $idc=$_REQUEST['idFournisseur'];
  $idv=$_REQUEST['numvers'];

  if($idv== "" ) echo"entrer l'id du versement"; 
  else
   {
      $req="select soldeCompte from fournisseur where idFournisseur='$idc'";
      $res=mysql_query($req);
      $t=mysql_fetch_row($res);
      $n=$t[0];	   

      if($m>0){
	       if($n>$m){
		 $qu="update fournisseur set soldeCompte=soldeCompte-'$m' where idFournisseur='$idc'";
		 $r=mysql_query($qu);
		 if($r){ 
		    $tuple="'$idv','$annee-$moi-$jour','$m','$idc'";     
                    insertion($tuple,"versementf");
		 }
		 else echo"<font color="."red"."size=5>revoir les informations entrees</font>";
                }
                else echo"<font color="."red"."size=5>le montant du versement est superieur au solde du compte de ce fournisseur</font>";
	}
	else
	  echo"<marquee ><font color="."maginta" ."size=5>veuillez entrer un montant superieure à 0</font></marquee>";
    }
?>    	 
	
	 <br><div align="right"><a href="effectuerunversementf.php"><blink>précédent</blink></a>	
	 
  </font>
  </b></body>
</html>