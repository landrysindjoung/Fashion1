<html>
 <title>Un test d''acces � la base</title>
  <body background="fond9.jpg">
  <br>
  <?php 
    require("getChamps.php");
	$tab=getChamps("fournisseur","idfournisseur"); 
    $tab1=getChamps("fournisseur","nom");       
   $nom=$_REQUEST['idfournisseur'];
   if($nom){
   $idp=$_REQUEST['nom'];
       if(!$nom)echo"Veuillez entrer des identit�s valides";
	 else 
	  if(!$idp)echo"Veuillez entrer des identit�s valides";
	  else{
	     $tuple="idFournisseur='$nom' and nom='$idp'";
		supprimer($tuple,'fournisseur');
	    }
	}   
	
	 
   ?>
   <br><div align="right"><a href="supprimerfournisseur.php"><blink>pr�c�dent</blink></a>
  </body>
<html>











