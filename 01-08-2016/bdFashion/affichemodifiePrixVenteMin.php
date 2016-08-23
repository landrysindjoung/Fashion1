<html>
 <title>Un test d''acces à la base</title>
  <body background="fond9.jpg">
  <br><br>
  <?php 
    require("getChamps.php");
 
   $id=$_REQUEST['date1'];
   $pvente=doubleval($_REQUEST['prixVente']);
   $ancpvente=doubleval($_REQUEST['ancienprixVente']);

   $requet="update produit set prixSortie=$pvente where idproduit='$id'";
   $requet1="select prixSortie,prixEntree from produit where idproduit='$id'";
   $result1=mysql_query($requet1);
   if($requet1){
     $ligne=mysql_fetch_row($result1);
     
   if(($ligne[0]==$ancpvente)&&($pvente>$ligne[1])){
      $result=mysql_query($requet);
      if(!$result) echo"Impossible de modifier";
      else 
        echo "<FONT color=\"red\"><h1><b>OPERATION REUSSIE</b></h1></font>";
   }
   else
      echo "<FONT color=\"blue\"><h3><b>revoir l'ancien prix de vente Minimal car celui entré n'est pas bon ou alors, le prix d'achat est supérieur ou égal au prix de vente</b></h3></font>";
	
  }else
     echo"requete impossible"; 
   ?>
   <br><div align="right"><a href="modifiePrixVenteMin.php"><blink>précédent</blink></a>	
  </body>
<html>











