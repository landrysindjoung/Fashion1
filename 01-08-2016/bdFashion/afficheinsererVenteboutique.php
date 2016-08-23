<html><head><title>liens vers les tables</title></head>
  <body background="fond9.jpg"> <font color="red">    
  
</font>
  <br><br>
<?php   
  require("getChamps.php");
  $tab=getChamps("stock","idproduit"); 
  $table=getChamps("vendeur","idvendeur");
   $n=intval($_REQUEST['quantité']);
   $m=floatval($_REQUEST['montant']);  
   $s=$_REQUEST['idproduit'];
   $c=$_REQUEST['idvendeur'];
   
      if($n<=0) echo"<font color="."red"."size=5><blink>Vérifier la quantité entrée!</blink></font>";
      else{
          $req1="select prixSortie from produit where idproduit='$s'";
	  $res1=mysql_query($req1);
	  $t1=mysql_fetch_row($res1);
          $a=$t1[0];
            $x=$m;
          if($x==0)$m=$a; 
            if($m<$a)
             echo"le prix unitaire est inferieur au prix de vente de ce produit";
             else{
	        $req="select quantite from stock where idproduit='$s'";
		$res=mysql_query($req);
		$t=mysql_fetch_row($res);
		$q=$t[0];
               	   
	  if($n<=$q){	     
	      $p=($m*$n);
         $date=getdate();
         $jour=$date['mday'];
         $moi=$date['mon'];
         $annee=$date['year'];
         $seconde=$date['seconds'];
         $minute=$date['minutes'];
         $heure=$date['hours'];   
         $tuple="'$s','$c',$n,'$annee-$moi-$jour','$heure:$minute:$seconde',$p";     
         insertion($tuple,"vente");
		 $qu="update stock set quantite=quantite-$n where idproduit='$s'";
                 $que="update vendeur set etat=etat+$p where idvendeur='$c'";
		 mysql_query($que);
		 mysql_query($que);
		 mysql_query($qu);
		 echo"insertion vente reussit";
	  }
	  else
		echo"<marquee ><font color="."maginta" ."size=5>cette quantite est supérieure à la quatité en stock! veuillez reprendre la requette avec une quantité plus exacte!</font></marquee>";
	}
    
  }
	 
?>    	 
	
	 <br><div align="right"><a href="insererVenteboutique.php"><blink>précédent</blink></a>	
	 
  </font>
  </b></body>
</html>