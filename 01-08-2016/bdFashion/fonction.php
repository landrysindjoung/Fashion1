<?php
function insere(){

  require("getChamps.php");
  $tab=getChamps("stock","idproduit");
  $table=getChamps("vendeur","idvendeur");
   $n=doubleval($_REQUEST['quantité']);
   $m=doubleval($_REQUEST['montant']);
   $s=$_REQUEST['idproduit'];


      if($n<=0) echo "<script type=\"text/javascript\">
              alert('vérifiez la quantité entrée ')</script>";
      else{
          $req1="select prixSortie from produit where idproduit='$s'";
	  $res1=mysql_query($req1);
	  $t1=mysql_fetch_row($res1);
          $a=$t1[0];
          if($m==0) $m=$a;

            if($m<$a)
             
             echo "<script type=\"text/javascript\">
              alert('le prix unitaire est inferieur au prix de vente de ce produit ')</script>";
             else{
	        $req="select quantite from stock where idproduit='$s'";
		$res=mysql_query($req);
		$t=mysql_fetch_row($res);
		$q=$t[0];	
	  if($n<=$q){	
	     $p=($m*$n);
          $tuple="'$s','$c',$n,'$date','$heure',$p";

         $requet="insert into vente values($tuple)";
         $result=mysql_query($requet);
         if(!$result) 
         echo "<script type=\"text/javascript\">
              alert('cette vente pourait déjà exister ')</script>";
         else{
                 echo "<FONT color=\"red\"><h1><b>INSERTION REUSSIE</b></h1></font>";
		 $qu="update stock set quantite=quantite-$n where idproduit='$s'";
		 $que="update vendeur set etat=etat+$p where idvendeur='$c'";
		 mysql_query($qu);
		 mysql_query($que);
		 echo"insertion vente reussit";
		 echo "<script type=\"text/javascript\">
                   alert(' la vente a été insérée ')</script>";

		 
          }
	  }
	  else
	echo "<script type=\"text/javascript\">
           alert(' vérifiez la quantité de produit entrée ')</script>";

	}

}

}
?>
