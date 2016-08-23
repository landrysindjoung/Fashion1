<?php
 session_start();
 //session_unset();
?>
<html><head><title>liens vers les tables</title></head>
  <body background="arrièreplan.jpg"">
<br>
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
 
  require("getChamps.php");
  $tab=getChamps("stock","idproduit");
//  $table=getChamps("vendeur","idvendeur");
echo" <form action=\"afficheinsererVenteA.php\" method=\"post\">";

 $tab=getChamps("stock","idproduit");
 // $table=getChamps("vendeur","idvendeur");
 echo "<tr>


  <td bgcolor=\"white\" colspan=\"2\" background=\"images/bac.jpg\"><font color=\"red\"><b>veuillez spécifier soigneusement la vente a effectuer<b></font> </td></tr>";
 
  echo "<tr><td><font color=\"cyan\"> Nom du Client</font></td><td><input type=\"text\" name=\"nomclient\" value=\"\"></td></tr>";
  	
  echo "<tr><td><font color=\"cyan\">identite du produit</font>  </td>
  <td><select name=\"idproduit\">";

  while($ligne=mysql_fetch_row($tab))
    echo"<option  value=$ligne[0]>$ligne[0]</option>";
    echo "</select></td></tr>";
 

	
 echo"   <tr><td><font color=\"cyan\">quantité</font></td>   <td><input type=\"text\" name=\"quantité\" value=\"0\" ></td></tr>
    <tr><td><font color=\"cyan\">prix de vente unitaire</font></td>   <td><input type=\"text\" name=\"montant\" value=\"0\" ></td></tr>
    <br><br><tr>
    <td align=\"right\"><a href=\"manipulationVendeur.php\"><font color=\"cyan\">précédent</font></a></td>
    <td align=\"right\"><input type=\"submit\" name=\"submit\" value=\"inserer\"></td>
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
