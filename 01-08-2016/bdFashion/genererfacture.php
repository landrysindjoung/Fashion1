<?php
 session_start();
?>
<html><head><title>liens vers les tables</title></head>
  <body background="images/acceuil1.jpg"> <font color="red">
<?php
      if(isset($_SESSION['idvendeur'])){
  ?>

</font>
  <br><br>
<?php

require("getChamps.php");

        $date1=getdate();
        $jour=$date1['mday'];
 	$moi=$date1['mon'];
 	$annee=$date1['year'];
 	$dat="$annee-$moi-$jour";
        $req="select `date`,`heure`,nomclient,idvendeur from facture
	      where date= '$dat' and heure in (select max(heure)as heure
	                                             from facture where `date`='$dat' ) ";
        $res=mysql_query($req);
        $t=mysql_fetch_row($res);
	$date=$t[0];
	$heure=$t[1];
	$nomclient=$t[2];
	$idvendeur=$_SESSION['idvendeur'];
	$reqi="select max(idfacture) from facture";
	$vali=mysql_query($reqi);
	$numfacture=0;
	while($ligne=mysql_fetch_row($vali))
	    $numfacture=$ligne[0];
	$numfacture=$numfacture+1;
echo" <table width=\"100%\" background=\"images\\bac.jpg\">

<tr width=\"100%\" background=\"images\\bac.jpg\"><td >
 <table  width=\"100%\"  height=\"15%\">
 <tr>
 <!-- ici l'image -->
 <td rowspan=5 width=\"10%\" height=\"100%\" border=0><center><font size=12>QA</font></center></td>
 <td rowspan=5 width=\"60%\" height=\"100%\" border=0><center><font size=6>Q</font>UINCAILLERIE <font size=6>C</font>HESUBAF Sarl
<br>Vente Mat�riaux de Construction:
<br>Electricit�-Plomberie-Menuiserie-Ma�onnerie-Divers
<b>T�l.:</b><i>233 451 475 / 677 769 650, Email: chesubafsarl@yahoo.fr</i>
<br><b>N<sup>o</sup> Contribuable: M 100400019486 S, B.P: 120 Dschang</b>
 </center></td></tr>

 <!-- ici la date et le num�ro de la facture -->
 <tr><td align=\"left\"><b>FACTURE N<sup><u>o</u></sup>: $numfacture</b></td>
 </tr><tr><td align=\"left\"><b>Date: $date</b> </td>
  </tr><tr><td align=\"left\"><b>Heure: $heure </b></td>
 </tr><tr><td align=\"left\"><b>Vendeur: $idvendeur</b></td>

 </tr>
 </table>

 </td></tr>
<!-- le nom du client-->

 <tr ><td width=\"60%\" align=\"left\"><b>Doit �:

     $nomclient";


echo " </b></td></tr>
<tr>
<table width=\"100%\" border=4 background=\"images\\bac.jpg\">
     <thead> <!-- En-t�te du tableau -->
       <tr >
		   <th width=\"10%\">R�f�rence
           <th width=\"45%\">D�signation</th>
           <th width=\"10%\">Quantit�</th>
           <th width=\"15%\">P.U.T.T.C</th>
           <th width=\"20%\">P.T.T.T.C</th>
       </tr>
   </thead>";
        $requete= " select nomP,quantite,montant from produit,vente where vente.date='$date' and vente.heure='$heure' and produit.idproduit=vente.idproduit";
        $result = mysql_query($requete);
        $total=0;
        if(!$result){
	   echo "echec de l'excution de la requ�te";
        }
        else{
          /*
$nbcol=mysql_num_rows($result);
	  echo "il y a $nbcol enregistrement";
*/
          while($mig1=mysql_fetch_row($result)){
             // $bal=$mig1[2]/$mig1[0];
             $requ="select idproduit from produit where nomP='$mig1[0]'";
             $result12=mysql_query($requ);
             while($mig2=mysql_fetch_row($result12)){
                 echo"  <tr>
                 <td>";
				 echo $mig2[0];
			  }
			  echo "</td>
              <td>";echo $mig1[0];echo "</td>
              <td>";echo $mig1[1];echo "</td>
              <td>";echo $mig1[2]/$mig1[1];echo " </td>
              <td>";echo $mig1[2];echo"</td>
               </tr>";
               $total+=$mig1[2];
           }
echo "
        <tr >
           <td colspan=3> Arr�t� la pr�sente facture � la somme de :<font color=\"black\"><b> $total Francs CFA </b>
		   <br><u>NB</u>:Les Marchandises Vendues et Livr�es ne sont ni reprises ni �chang�es
	  
	   </font> </td>
           <td><b><center>Net � payer</center></b></td>
           <td ><b><i><center><font color=\"black\"><h1><b> $total </b></h1></font></center></i></b></td>
       </tr>
  </tr>
</table>
</table><br><br>
<center><table border=0 width=\"100%\"><tr>
<td with=\"25%\" align=\"center\"><a href=\"facture.php\"><font color=\"red\">valider la facture</font></a></td>
<td with=\"25%\" align=\"center\"><a href=\"insererVente1.php\"><font color=\"red\">ajouter un produit � la facture</font></a></td>
<td with=\"25%\" align=\"center\"><font color=\"white\"><a href=\"supprimerVenteVendeur.php\"><font color=\"red\">supprimer un produit � la facture</font></a></font></td>
<td with=\"25%\">.</td>
</tr></table></center>";

/*******************suppression des variables de session************/


//session_destroy();
}
}
else{
   echo "<center><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><font color=\"red\"> vous ne disposez pas des autorisations n�cessaire pour acc�der � cette page, veuillez contacter l'administrateur pour plus d'informations</center></font>";
}	
?>

	
  </font>
  </b>	
</body>
</html>
