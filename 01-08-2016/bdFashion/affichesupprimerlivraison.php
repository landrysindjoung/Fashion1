<html>
 <title>Un test d''acces � la base</title>
  <body background="fond9.jpg">
  <br><br>
  <?php 
    require("getChamps.php");
	$tab=getChamps("livraison","idfournisseur"); 
    $tab1=getChamps("livraison","idproduit");
     $nom=$_REQUEST['idfournisseur'];
   if($nom){
   $idp=$_REQUEST['idproduit'];
       if(!$nom)echo"Veuillez entrer des identit�s valides";
	 else 
	  if(!$idp)echo"Veuillez entrer des identit�s valides";
	  else{
	     $tuple="idfournisseur='$nom' and idproduit='$idp'";
		supprimer($tuple,"livraison");
	    }
	}   
	
	 
   ?>
   <br><div align="right"><a href="supprimerlivraison.php"><blink>pr�c�dent</blink></a>
  </body>
<html>











