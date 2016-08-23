<html>
 <title>Un test d''acces à la base</title>
  <body background="fond9.jpg">
  <br><br>
  <?php 
    require("getChamps.php");
      
   $etat=doubleval($_REQUEST['etat']);
     if($etat>=0){
   $mat=$_REQUEST['idvendeur'];
   $nom=$_REQUEST['nom'];
   $etat=$_REQUEST['etat'];
   $adr=$_REQUEST['adresse'];     
   $tuple="'$mat','$nom','$etat',$adr";
   insertion($tuple,"vendeur");	      
  }else 
     echo"l'etat du compte doit être positif";
	 
   ?>
   <br><div align="right"><a href="insereremployer.php"><blink>précédent</blink></a>	
  </body>
<html>











