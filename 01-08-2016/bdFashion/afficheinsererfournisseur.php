<html>
 <title>Un test d''acces � la base</title>
  <body background="fond9.jpg">
  <br><br>
  <?php 
    require("getChamps.php");      
   $mat=$_REQUEST['idfournisseur'];   
     if($mat){
    $nom=$_REQUEST['nom'];
    $adr=$_REQUEST['adresse'];
       if($nom=="..."||$mat=="...")echo"Veuillez entrer les param�tres valides";
	 	  else{
	    $tuple="'$mat','$nom','$adr','0'";
		insertion($tuple,"fournisseur");
	    }
	 }
	 
   ?>
   <br><div align="right"><a href="insererfournisseur.php"><blink>pr�c�dent</blink></a>	
  </body>
<html>











