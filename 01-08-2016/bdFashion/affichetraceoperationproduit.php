<html><head><title>liens vers les tables</title></head>
  <body background="fond9.jpg"> <font color="red">    
  
</font>
  <br><br>
<?php   
  require("getChamps.php");
  $nom=$_REQUEST['nom'];
  $idc=$_REQUEST['idproduit'];
  echo"$nom  $idc";
  $req1="select p.nomP,v.quantite,v.date from produit as p,vente as v where p.idproduit='$idc' and v.idproduit='$idc'";
  $req2="select p.nomP,a.quantite,a.date from produit as p,arrivages as a where p.idproduit='$idc' and a.idproduit='$idc'";
	
  echo"<center><table border=2>";
  echo"<tr><td align="."center"." colspan=3 bgcolor="."white"."><font color="."red"."><u>achats effectues pour ce produit::$nom!</u></font></td></tr>";
  echo"<tr bgcolor="."yellow".">
  <td>nom du produit</td>
  <td>quantite vendue</td>
  <td>date</td>
  </tr> ";
   affiche($req1);
   echo"</table></center>";
   
  echo"<center><table border=2>";
  echo"<tr><td align="."center"." colspan=3 bgcolor="."white"."><font color="."red"."><u>arrivages pour ce produit::$nom!</u></font></td></tr>";
  echo"<tr bgcolor="."yellow".">
  <td>nom du produit</td>
  <td>quantité entrée</td>
  <td>date</td>
  </tr> ";
   affiche($req2);
   echo"</table></center>";

?>
	 <br><div align="right"><a href="traceoperationproduit.php"><blink>précédent</blink></a>	
	 
  </font>
  </b></body>
</html>