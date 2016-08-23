<html>
 <title>Un test d''acces à la base</title>
  <body background="fond9.jpg">
  <br><br>
  <?php 
    require("getChamps.php");
 $tab=getChamps("livraison","idproduit"); 
   $idp=$_REQUEST['idproduit'];
     if(!$idp)echo"Veuillez entrer un produit valide valides";
	 	  else{
	    $requet="select * from fournisseur having idfournisseur in (select idfournisseur from livraison where idproduit='$idp')";
		 echo"<br><center><table border=2>";
  echo"<tr><td colspan=3 bgcolor="."white"."><marquee><font color="."red".">Fournisseur(s) de produit $idp! </font></marquee></td></tr>";
	 echo"<tr bgcolor="."yellow".">
	      <td>idFournisseur</td>
	      <td>nom du Fournisseur</td>
	      <td>adresse</td>		  		  
	     </tr> ";
	    affiche($requet);
   echo"</table></center>";
	    }	 
   ?>
   <br><br><br><div align="right"><a href="fournisseurprod.php"><blink>précédent</blink></a>	<br><br>
  </body>
</html>











