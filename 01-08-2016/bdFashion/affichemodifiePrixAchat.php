<html>
 <title>Un test d''acces à la base</title>
  <body background="fond9.jpg">
  <br><br>
  <?php 
    require("getChamps.php");
 
   $id=$_REQUEST['date1'];
   $pvente=doubleval($_REQUEST['prixVente']);
   $ancpvente=doubleval($_REQUEST['ancienprixVente']);

   $requet="update produit set prixEntree=$pvente where idproduit='$id'";
   $requet1="select prixEntree,prixSortie from produit where idproduit='$id'";
   $result1=mysql_query($requet1);
   if($requet1){
     $ligne=mysql_fetch_row($result1);
     
   if(($ligne[0]==$ancpvente)&&($ligne[1]>$pvente)){
      $result=mysql_query($requet);
      if(!$result) echo"Impossible de modifier";
      else 
        echo "<FONT color=\"red\"><h1><b>OPERATION REUSSIE</b></h1></font>";
   }
   else
      echo "<FONT color=\"blue\"><h3><b>revoir l'ancien prix d'achat car celui entré n'est pas bon ou alors, le nouveau prix d'achat est supérieur au prix de vente minimal</b></h3></font>";
	
  }else
     echo"requete impossible"; 
   ?>
   <br><div align="right"><a href="modifiePrixAchat.php"><blink>précédent</blink></a>	
  </body>
<html>











