<html>
 <title>Un test d''acces � la base</title>
  <body background="fond9.jpg">
  <?php 
    require("getChamps.php");
	$tab=getChamps("fournisseur","idfournisseur"); 
    $tab1=getChamps("produit","idproduit");
    $nom=$_REQUEST['idfournisseur'];
   if($nom){
   $idc=$_REQUEST['idproduit'];
       if(!$nom)echo"Veuillez entrer un nom valide";
	 else 
	  if(!$idc)echo"Veuillez entrer une identit� valide";
	  else{
	     $tuple="'$nom','$idc'";
		insertion($tuple,"livraison");
	    }
	}   
	
	 
   ?>
   <br><div align="right"><a href="insererlivraison.php"><blink>pr�c�dent</blink></a>
  </body>
<html>











