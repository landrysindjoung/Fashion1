<html>
 <title>Un test d''acces à la base</title>
  <body background="fond9.jpg">
  <br><br><br><br><br><br><br><br>
<table align="center"><tr><td colspan=2 align="center"><font color="red"><u><h1>Fiche des produits</h1></u></font></td></tr>
</table>

  <?php 
  require("getChamps.php");
  $requet="select * from produit order by nomP asc";
  echo"<br><center><table border=2>";
  echo"<tr align=center><td colspan=8 bgcolor="."white"."><font color="."red".">Liste des produits disponibles </font></td></tr>";
	 echo"<tr bgcolor="."yellow".">
	      <td>idproduit</td>
		  <td>nom du produit</td>
          <td>Prix de sortie</td>
		  <td>prix d'entée </td>
		  <td>id Fournisseur </td>
		  <td>quantite minimale </td>
                  <td>idstock </td>
		  <td>role du produit </td>
		  </tr> ";
	    affiche2($requet,8);
   echo"</table></center>";
 
   ?>
    <?php 
   echo" <center><a href=\"manipulationVendeur.php\">RETOUR</a></center>";
   ?>
   
  </body>
<html>











