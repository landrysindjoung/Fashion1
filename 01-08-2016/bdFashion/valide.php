<?php
session_start();

session_unset();
session_destroy();
echo "<script type=\"text/javascript\">
      alert(' la facture a été enregistrée ')</script>";

?>

<?php
 session_start();

session_unset();
session_destroy();
echo "<script type=\"text/javascript\">
      alert(' la facture a été enregistrée ')</script>";

?>
<html><head><title>liens vers les tables</title></head>
  <body background="fond9.jpg"> <b><u>veuillez spécifier soigneusement les valeurs à insérer</u><font color="red">

</font>
  <br><br>
  <table>
<?php
if(!isset($_SESSION['Date'])){
 $date1=getdate();
 $jour=$date1['mday'];
 $moi=$date1['mon'];
 $annee=$date1['year'];
 $dat="$annee-$moi-$jour";

 $seconde=$date1['seconds'];
 $minute=$date1['minutes'];
 $heure1=$date1['hours'];

 $heure="$heure1:$minute:$seconde";
 $_SESSION['Date'] = $dat;
 $_SESSION['Heure'] = $heure;
}
else{
  $dat=$_SESSION['Date'];
  $heure=$_SESSION['Heure'];
}
 echo "
 <tr > <td> date</td><td bgcolor=\"white\">$dat</td></tr>
 <tr><td> heure</td><td bgcolor=\"white\">$heure</td></tr>";

  require("getChamps.php");
 ?>
 <form action="afficheinsererVente1.php" method="post">
 <?php
  $tab=getChamps("stock","idproduit");
  $table=getChamps("vendeur","idvendeur");
  echo "<tr><td> Nom du Client</td><td><input type=\"text\" name=\"nomclient\" value=\"\"></td></tr>";
  echo "<tr><td>identite du vendeur </td> ";
 ?>

  <td><select name="idvendeur">
  <option value="">...</option>"
  <?php
    while($ligne1=mysql_fetch_row($table))
    echo"<option value=$ligne1[0]>$ligne1[0]</option>";
    echo "</select></td></tr>";	
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
    <tr>
    <td align="left"><input type="submit" name="submit" value="Générer la facture">
    <td  align="right">
    <input type="submit" name="submit" value="inserer">
    </td></tr>
</form>
</table>	
  </font>
  </b></body>
</html>
