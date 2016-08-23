<?php
 session_start();
 require("getChamps.php");
 //session_unset();
?>
<html><head><title>liens vers les tables</title>

</head>
  <body background="images/acceuil1.jpg">
<br><br><br><br><br><br><br><br><br>
  <center>
  <?php
      if(isset($_SESSION['idvendeur'])){
  ?>

</font>
  <br><br>
  <table background="images/table1.jpg" height="45%">
<?php

if ((!isset($_SESSION['dat'])) and(!isset($_SESSION['heur']))){
 $date1=getdate();
 $jour=$date1['mday'];
 $moi=$date1['mon'];
 $annee=$date1['year'];
 $dat="$annee-$moi-$jour";

 $seconde=$date1['seconds'];
 $minute=$date1['minutes'];
 $heure1=$date1['hours'];

 $heur="$heure1:$minute:$seconde";

$_SESSION['dat']= $dat;
$_SESSION['heur']=$heur;
$_SESSION['control']= 0;
}
$idvendeur=$_SESSION['idvendeur'];

$tab=getChamps("stock","idproduit");
$idproduit=$_REQUEST['idproduit'];
$infosduproduit="select nomP,prixSortie,prixEntree from produit where idproduit='$idproduit'";
$quantiteenstockduproduit="select quantite from stock where idproduit='$idproduit'";
$tab1 = mysql_query($infosduproduit);
$tab2 = mysql_query($quantiteenstockduproduit);
//  $table=getChamps("vendeur","idvendeur");
echo" <form action=\"afficheinsererVente.php\" method=\"post\">";

 $tab=getChamps("stock","idproduit");
 // $table=getChamps("vendeur","idvendeur");
 echo "<tr>

  <td bgcolor=\"white\" colspan=\"2\" background=\"images/bac.jpg\"><font color=\"red\"><b>veuillez spécifier soigneusement la vente a effectuer<b></font> </td></tr>";
while($ligne=mysql_fetch_row($tab1)){
    echo"<tr><td><font color=\"cyan\">Id du produit:</font></td><td>$idproduit</td></tr>";
    echo"<tr><td><font color=\"cyan\">Nom du produit:</font></td><td>$ligne[0]</td></tr>";
    echo"<tr><td><font color=\"cyan\">Prix d'Entrée du produit:</font></td><td>$ligne[2]</td></tr>";
    echo"<tr><td><font color=\"cyan\">Prix Minimum de sortie du produit:</font></td><td>$ligne[1]</td></tr>";
}
while($ligne=mysql_fetch_row($tab2)){
    echo"<tr><td><font color=\"cyan\">Quantité en stock du produit:</font></td><td>$ligne[0]</td></tr>";
}
  echo "<tr><td><font color=\"cyan\"> Nom du Client:</font></td><td><input type=\"text\" name=\"nomclient\"  ></td></tr>";
  	
  echo "<tr><td> </td>
  <td><input type=\"hidden\" name=\"idproduit\" value=\"$idproduit\">";
    echo "</select></td></tr>";


	
 echo"   <tr><td><font color=\"cyan\">quantité</font></td>   <td><input type=\"text\" name=\"quantité\" value=\"0\" ></td></tr>
    <tr><td><font color=\"cyan\">prix de vente unitaire</font></td>   <td><input type=\"text\" name=\"montant\" value=\"0\" ></td></tr>
    <br><br><tr>
    <td align=\"right\"><a href=\"insererVente1.php\"><font color=\"cyan\">précédent</font></a></td>
    <td align=\"right\"><input type=\"submit\" name=\"submit\" value=\"inserer\"></td>
    </tr></form>



</table>	
  </font></b>";

  echo "<font color=\"blue\" size=30 >Prix Minimum du produit sélectionné à l'unité</font>:
  <form name=\"f11\" >
     <input type=\"text\" id=\"afficheprixunique\" size=45>
  </form>";
}
else{
   echo "<br><br><br><br><br><br><br><br><br><font color=\"red\"> vous ne disposez pas des autorisations nécessaire pour accéder à cette page, veuillez contacter l'administrateur pour plus d'informations</font>";
}
?>

  </center></body>
</html>
