<?php
 session_start();

 require("getChamps.php");
   $dat=$_SESSION['dat'];
   $heur=$_SESSION['heur'];
   $c=$_SESSION['idvendeur'];
 if ($_SESSION['control']==0){
   
   $k=$_REQUEST['nomclient'];
//   $_SESSION['idvendeur']= $c;
   $_SESSION['nomclient']=$k;
   //$c=$_SESSION['idvendeur'];
   //$k=$_SESSION['nomclient'];

// recherche de l'identifiant max des factures

   $maxid="SELECT max(`idfacture`) FROM `facture`";
   $resid=mysql_query($maxid);
   $tid=mysql_fetch_row($resid);
   $idmax=$tid[0]+1;

   $t=" '$idmax' , '$dat' , '$heur' , '$k' , '$c'  ";
   $req="insert into facture values ($t)";
   $reso=mysql_query($req);
   $_SESSION['control']=1;
}

?>


<html><head><title>liens vers les tables</title></head>
  <body background="arrièreplan.jpg"> <font color="red">
  <br><br><br><br><br><br><br><br><br><br>
  <center>
  <?php
      if(isset($_SESSION['idvendeur'])){
  ?>
</font>
  <br><br>
<?php   
 
  $tab=getChamps("stock","idproduit"); 
//  $table=getChamps("vendeur","idvendeur");
   $n=doubleval($_REQUEST['quantité']);
   $m=doubleval($_REQUEST['montant']);  
   $s=$_REQUEST['idproduit'];
   //$c=$_REQUEST['idvendeur'];
   
      if($n<=0) echo"<font color=\"red\"><blink>Vérifier la quantité entrée!</blink></font>";
      else{
          $req1="select prixSortie from produit where idproduit='$s'";
	  $res1=mysql_query($req1);
	  $t1=mysql_fetch_row($res1);
          $a=$t1[0];
          if($m==0) $m=$a;
         
            if($m<$a)

             echo"<b><font color=\"red\" height=\"12\">le prix unitaire est inferieur au prix de vente de ce produit</font></b>";
             else{
	        $req="select quantite from stock where idproduit='$s'";
		$res=mysql_query($req);
		$t=mysql_fetch_row($res);
		$q=$t[0];	   
	  if($n<=$q){	     
	     $p=($m*$n);

         $tuple="'$s','$c',$n,'$dat','$heur',$p";
         
         $requet="insert into vente values($tuple)";
         $result=mysql_query($requet);
         if(!$result) echo"<br><font color=\"red\" height=\"12\"> Impossible d'insérer, cette vente pourrait déjà exister </font></b> ";
         else{
//                 echo "<FONT color=\"red\"><h1><b>CONTINUER  LA FACTURATION</b></h1></font>";
		 $qu="update stock set quantite=quantite-$n where idproduit='$s'";
		 $que="update vendeur set etat=etat+$p where idvendeur='$c'";
		 
		 mysql_query($qu);
		 mysql_query($que);
	

                /****************reprise des paramètres de la vente**************/
                
                $tab=getChamps("stock","idproduit");
  
  ?>

  <table background="images/table1.jpg" height="45%">
  <form action="afficheinsererVente.php" method="post">
  <td bgcolor="white" colspan="2" background="images/bac.jpg"><b><font color="red"><center>Continuer la facturation</center></font></b> </td></tr>
  <?php
    
  echo "<tr><td>identite du produit  </td> ";
   ?>
  <td><select name="idproduit">
  <?php
  while($ligne=mysql_fetch_row($tab))
    echo"<option  value=$ligne[0]>$ligne[0]</option>";
    echo "</select></td></tr>";
	?>
    <tr><td>quantité</td>   <td><input type="text" name="quantité" value="0" ></td></tr>
    <tr><td>prix de vente unitaire</td>   <td><input type="text" name="montant" value="0" ></td></tr>
    <br><br><tr><td align="left"> <br><div align="right"><a href="genererfactureA.php">Générer la facture</a></td>
    <td colspan=2 align="right"><input type="submit" name="submit" value="inserer"></td>
    </tr></form>

</table>	
 <?php


  /**************fin reprise ds paramètres************/
  
          }
	  }
	  else
		echo"<marquee ><font color="."maginta" ."size=5>cette quantite est supérieure à la quatité en stock! veuillez reprendre la requette avec une quantité plus exacte!</font></marquee>";
	}

  }
  }
else{
   echo "<br><br><br><br><br><br><br><br><font color=\"red\"> vous ne disposez pas des autorisations nécessaire pour accéder à cette page, veuillez contacter l'administrateur pour plus d'informations</font>";
}
	
?>    	
	
	 
	
  </font>
  </b></center></body>
</html>
