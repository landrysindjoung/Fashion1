<html>
 <title>Un test d''acces à la base</title>
  <body background="fond9.jpg">
  <br>
  <?php 
    require("getChamps.php");
	$tab=getChamps("client","idclient"); 
    $tab1=getChamps("produit","idproduit");  
   $idc=$_REQUEST['idclient'];    
   if($idc){
   $idp=$_REQUEST['idproduit'];
       if(!$idp)echo"Veuillez entrer des valeurs valides";
	 else 
	  if(!$idc)echo"Veuillez entrer des valides";
	  else{
	     $tuple="idproduit='$idp' and idclient='$idc'";
	supprimer($tuple,"commande");
	    }
	}   
	
	 
   ?>
   <br><div align="right"><a href="supprimercommande.php"><blink>précédent</blink></a>
  </body>
<html>











