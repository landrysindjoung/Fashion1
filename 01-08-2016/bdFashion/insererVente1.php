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

 /*
echo "
 <tr > <td> date1</td><td bgcolor=\"white\">$dat</td></tr>
 <tr><td> heure</td><td bgcolor=\"white\">$heure</td></tr>";

*/
 

 // $tab=getChamps("stock","idproduit");
//  $table=getChamps("vendeur","idvendeur");
echo" <form action=\"insererVente2.php\" method=\"post\">";

 $tab=getChamps("produit","idproduit,nomp");
 // $table=getChamps("vendeur","idvendeur");
 echo "<tr>


  <td bgcolor=\"white\" colspan=\"2\" background=\"images/bac.jpg\"><font color=\"red\" ><b>Veuillez sélectionner l'identifiant produit à vendre<b></font> </td></tr>";
  	
  echo "<tr><td><font color=\"cyan\">Nom du produit</font>  </td>
  <td><select name=\"idproduit\" id=\idproduit\">";

  while($ligne=mysql_fetch_row($tab))
    echo"<option  value=$ligne[0] >$ligne[1]</option>";
    echo "</select></td></tr>";
 

	
 echo"   <tr><br><br><tr>
    <td align=\"right\"><a href=\"manipulationVendeur.php\"><font color=\"cyan\">Précédent</font></a></td>
    <td align=\"right\"><td align=\"right\"><input type=\"submit\" value=\"Continuer\"></td></td>
    </tr></form>
</table>	
  </font></b>";
}
else{
   echo "<br><br><br><br><br><br><br><br><br><font color=\"red\"> vous ne disposez pas des autorisations nécessaire pour accéder à cette page, veuillez contacter l'administrateur pour plus d'informations</font>";
}
?>

  </center></body>
</html>
