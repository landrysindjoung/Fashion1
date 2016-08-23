<?php
session_start();

$date=$_SESSION['Date'];
$heure=$_SESSION['Heure'];
$c=$_POST['idvendeur'];
if(!isset($_SESSION['Idvendeur'])&!isset($_SESSION['nomclient'])){
   $_SESSION['Idvendeur']=$_POST['idvendeur'];
   $_SESSION['nomclient']=$_POST['nomclient'];
}

?>
<html><head><title>liens vers les tables</title></head>
  <body background="fond9.jpg"> <font color="red">

</font>
  <br><br>
<?php
  require("getChamps.php");
  $tab=getChamps("stock","idproduit");
  $table=getChamps("vendeur","idvendeur");
   $n=doubleval($_REQUEST['quantité']);
   $m=doubleval($_REQUEST['montant']);
   $s=$_REQUEST['idproduit'];
   

      if($n<=0) echo"<font color="."red"."size=5><blink>Vérifier la quantité entrée!</blink></font>";
      else{
          $req1="select prixSortie from produit where idproduit='$s'";
	  $res1=mysql_query($req1);
	  $t1=mysql_fetch_row($res1);
          $a=$t1[0];
          if($m==0) $m=$a;

            if($m<$a)
             echo"le prix unitaire est inferieur au prix de vente de ce produit";
             else{
	        $req="select quantite from stock where idproduit='$s'";
		$res=mysql_query($req);
		$t=mysql_fetch_row($res);
		$q=$t[0];	
	  if($n<=$q){	
	     $p=($m*$n);
         /*
$date=getdate();
         $jour=$date['mday'];
         $moi=$date['mon'];
         $annee=$date['year'];
         $seconde=$date['seconds'];
         $minute=$date['minutes'];
         $heure=$date['hours'];
*/
         $tuple="'$s','$c',$n,'$date','$heure',$p";

         $requet="insert into vente values($tuple)";
         $result=mysql_query($requet);
         if(!$result) echo"Impossible d'insérer, cette vente pourrait déjà exister ";
         else{
                 echo "<FONT color=\"red\"><h1><b>INSERTION REUSSIE</b></h1></font>";
		 $qu="update stock set quantite=quantite-$n where idproduit='$s'";
		 $que="update vendeur set etat=etat+$p where idvendeur='$c'";
		 mysql_query($qu);
		 mysql_query($que);
		 echo "<script type=\"text/javascript\">
                  alert(' INSERTION VENTE REUSSIE ')</script>";
                  
                /****************reprise des paramètres de la vente**************/
		 
		 echo "
  <tr > <td> date</td><td bgcolor=\"white\">$dat</td></tr>
 <tr><td> heure</td><td bgcolor=\"white\">$heure</td></tr>";

  require("getChamps.php");

echo" <form action=\"afficheinsererVente1.php\" method=\"post\">";

 $tab=getChamps("stock","idproduit");
  $table=getChamps("vendeur","idvendeur");
  echo "<tr><td> Nom du Client</td><td><input type=\"text\" name=\"nomclient\" value=\"\"></td></tr>";
  echo "<tr><td>identite du vendeur </td>


  <td><select name=\"idvendeur\">
  <option value=\"\">...</option>";
    while($ligne1=mysql_fetch_row($table))
    echo"<option value=$ligne1[0]>$ligne1[0]</option>";
    echo "</select></td></tr>";	
  echo "<tr><td>identite du produit  </td>
  <td><select name=\"idproduit\">";

  while($ligne=mysql_fetch_row($tab))
    echo"<option  value=$ligne[0]>$ligne[0]</option>";
    echo "</select></td></tr>";


	
 echo"   <tr><td>quantité</td>   <td><input type=\"text\" name=\"quantité\" value=\"0\" ></td></tr>
    <tr><td>prix de vente unitaire</td>   <td><input type=\"text\" name=\"montant\" value=\"0\" ></td></tr>
    <tr>
    <td align=\"left\"><input type=\"submit\" name=\"submit\" value=\"inserer\"></form>
    <td  align=\"right\">
   <input type=\"submit\" name=\"submit\" value=\"Visualiser la facture\"></form>
    </td></tr>



</table>	
  </font></b>";
  
  /**************fin reprise ds paramètres************/
          }
	  }
	  else
		echo"<marquee ><font color="."maginta" ."size=5>cette quantite est supérieure à la quatité en stock! veuillez reprendre la requette avec une quantité plus exacte!</font></marquee>";
	}

  }
	
?>    	
	
	 <br><div align="right"><a href="insererVente.php"><blink>précédent</blink></a>	
	
  </font>
  </b></body>
</html>
