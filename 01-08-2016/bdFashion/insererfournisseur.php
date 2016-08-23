<html>
 <title>Un test d''acces à la base</title>
  <body background="fond9.jpg">
  
  <?php 
  require("getChamps.php");
 echo " <br><br><br><br><br><br><br><br>
<table><tr><td colspan=2 align=\"center\"><font color=\"red\"><u><h1>Entrer les informations sur le fournisseur!!</h1></u></font></td></tr>
</table>";
echo"<table align=\"center\">
 <form action=\"afficheinsererfournisseur.php\" method=\"post\"> 
<tr><td>idfournisseur:</td><td><input type=\"texte\" name=\"idfournisseur\" value=\"...\">
</td><tr><td>nom & prenom:</td><td><input type=\"texte\" name=\"nom\" value=\"...\">
</td><tr><td>adresse:</td><td><input type=\"texte\" name=\"adresse\" value=\"...\">
</td></tr><tr><td colspan=\"2\"align=\"right\"><input type=\"submit\" name=\"submit\" value=\"inserer\"></td></tr>
</form>	</table>	";
echo" <center><a href=\"manipulationVendeur.php\">RETOUR</a></center>";
  ?> 
  </body>
<html>











