<html>
 <title>Un test d''acces � la base</title>
  <body background="fond9.jpg">
  <br><br>
  <?php 
    require("getChamps.php");
	$tab=getChamps("produit","idproduit"); 
    $tab1=getChamps("produit","prixvente");     
   $nom=$_REQUEST['date1'];
   if($nom){     
	  if(!$nom)echo"Veuillez entrer une identit� valide";
	  else{
	    $cle="idproduit='$nom'";
		supprimer($cle,"produit");
		supprimer2($cle,"stock");
                supprimer($cle,"arrivages");
	    }
    }		
	 
   ?>
   <br><br><br><div align="right"><a href="supprimerproduit.php"><blink>pr�c�dent</blink></a>	<br><br>
  </body>
<html>











