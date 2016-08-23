<html>
 <title>affiche stock produit</title>
  <body background="fond9.jpg">
  <?php 
  require("getChamps.php");
  $idp=$_REQUEST['idproduit'];
  $requet="select * from stock where idproduit='$idp'";
  echo"<center><table border=2>";
  echo"<tr><td colspan=7 bgcolor="."white"."><marquee><font color="."red"."><u>Stock présent au magasin!</u></font></marquee></td></tr>";
	 echo"<tr bgcolor="."yellow".">
	      <td>identite stock</td>
		  <td>identite produit</td>
		  <td>quantité en stock</td>
	     </tr> ";
	    affiche($requet);
   echo"</table></center>";
 
   ?>
    <?php 
   echo" <center><a href=\"stockProduit.php\">RETOUR</a></center>";
   ?>
  </body>
</html>











