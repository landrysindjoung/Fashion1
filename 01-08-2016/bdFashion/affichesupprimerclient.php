<html>
 <title>Un test d''acces à la base</title>
  <body background="fond9.jpg">
  <br><br>
  <?php 
    require("getChamps.php");	
   $nom=$_REQUEST['nom'];
   $idc=$_REQUEST['idclient'];
   echo"$nom";
   echo"<br>$idc";
    if(!$nom)echo"Veuillez entrer un nom valide";
	 else 
	  if(!$idc)echo"Veuillez entrer une identité valide";
	  else{
	  $cle="nomclient='$nom' and idclient='$idc'";
		supprimer($cle,"client");
	    }
	   
	
	 
   ?>
   <br><br><div align="right"><a href="supprimerclient.php"><blink>précédent</blink></a>
  </body>
<html>











