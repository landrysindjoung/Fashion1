<?php
// session_start();



?>
<html><head><title>liens vers les tables</title></head>
  <body background="fond9.jpg"> <font color="red">

</font>
  <br><br>
<?php

require("getChamps.php");

        $req="select max(date),max(heure),nomclient,idvendeur from facture ";
        $res=mysql_query($req);
        $t=mysql_fetch_row($res);
	$date=$t[0];
	$heure=$t[1];
	$nomclient=$t[2];
	$idvendeur=$t[3];
	
echo" <table width=\"100%\" background=\"images\\bac.jpg\">

<tr width=\"100%\" background=\"images\\bac.jpg\"><td >
 <table  width=\"100%\"  height=\"23%\">
 <tr>
 <!-- ici l'image -->
 <td rowspan=4 background=\"images\\test.bmp\" width=\"80%\" height=\"100%\"><img src=\"images\\test.bmp\" width=\"100%\" height=\"15%\"></td>

 <!-- ici la date et le numéro de la facture -->
 </tr><tr><td background=\"images\\bac.jpg\"><center><b>FACTURE</b></center></td>
 </tr><tr><td background=\"images\\bac.jpg\"><center><font color=\"blue\"><b>$date</b> </font></center></td>
  </tr><tr><td background=\"images\\bac.jpg\"><center><b><font color=\"red\"><font color=\"blue\">$heure </font></font></b></center></td>

 </tr>
 </table>

 </td></tr>
 <!-- ici la situation de l'entreprise -->
 <tr ><td width=\"60%\" align=\"center\"><i>Situé à l'entrée du marché du Mfoundi</i></td></tr>
  <!-- les contacts de l'entreprise-->
<tr ><td width=\"60%\" align=\"center\"><b>Tél.:</b><i> 95 12 77 76 / 75 30 32 08</i> <b>RC / YAO / A /2358 No Cont: P028700507881 G</b></td></tr>
<!-- le nom du client-->

 <tr ><td width=\"60%\" align=\"left\"><b>Doit M.:

     $nomclient";


echo " </b></td></tr>
<tr>
<table width=\"100%\" border=4 background=\"images\\bac.jpg\">
     <thead> <!-- En-tête du tableau -->
       <tr>
           <th background=\"images\\bouton.jpg\" width=\"10%\"><img src=\"images\\quantite.jpg\" width=\"100%\" height=\"100%\"></th>
           <th background=\"images\\bouton.jpg\" width=\"55%\"><img src=\"images\\designe.jpg\" width=\"100%\" height=\"100%\"></th>
           <th background=\"images\\bouton.jpg\" width=\"15%\"><img src=\"images\\pu.jpg\" width=\"100%\" height=\"100%\"></th>
           <th background=\"images\\bouton.jpg\" width=\"20%\"><img src=\"images\\prix.jpg\" width=\"100%\" height=\"100%\"></th>
       </tr>
   </thead>";
        $requete= " select quantite,nomP,montant from produit,vente where vente.date='$date' and vente.heure='$heure' and produit.idproduit=vente.idproduit";
        $result = mysql_query($requete);
        $total=0;
        if(!$result){
	   echo "echec de l'excution de la requête";
        }
        else{
          $nbcol=mysql_num_rows($result);
	  echo "il y a $nbcol enregistrement";
          while($mig1=mysql_fetch_row($result)){
              $bal=$mig1[2]/$mig[0];
              echo"  <tr>
              <td>";echo $mig1[0];echo "</td>
              <td>";echo $mig1[1];echo "</td>
              <td>";echo $mig1[2]/$mig1[0];echo " </td>
              <td>";echo $mig1[2];echo"</td>
               </tr>";
               $total+=$mig1[2];
           }
echo "
        <tr >
           <td colspan=2>Les Marchandises Vendues et Livrées ne sont ni reprises ni échangées
	   <br>Arrêté la présente facture à la somme de :<font color=\"red\"><b> $total </b><br>
	   </font> Le Vendeur: <b>$idvendeur</b></td>
           <td><b><center>Total</center></b></td>
           <td background=\"images\\bouton.jpg\"><b><i><center><font color=\"red\"> $total </font></center></i></b></td>
       </tr>
  </tr>
</table>
</table><br><br>
<center><table border=0 width=\"100%\"><tr>
<td with=\"25%\"><form name=\"f1\" method=\"post\" action=\"insererVente1.php\"><input name=\"valide\" type=\"submit\" value=\"valider la facture\"></form></td>
<td with=\"25%\" align=\"center\"><a href=\"insererVente1.php\"><font color=\"white\">ajouter un produit à la facture</font></a></td>
<td with=\"25%\" align=\"center\"><font color=\"white\"><a href=\"supprimerVente.php\"><font color=\"white\">supprimer un produit à la facture</font></a></font></td>
<td with=\"25%\">.</td>
</tr></table></center>";

/*******************suppression des variables de session************/

/*session_unset();
session_destroy();*/
}
	
?>

	
  </font>
  </b>	
</body>
</html>
