<html>
 <title>Un test d''acces � la base</title>
  <body background="fond9.jpg">
  <br><br>
  <?php 
    require("getChamps.php");
	$tab=getChamps("vendeur","nom"); 
    $tab1=getChamps("vendeur","idvendeur");     
   $nom=$_REQUEST['date1'];
   if($nom){
   $idc=$_REQUEST['date2'];      
	  if(!$idc)echo"Veuillez entrer une identit� valide";
	  else{
	    $cle="nom='$nom' and idvendeur='$idc'";
		//echo"mon=$nom matricule=$idc";
		supprimer($cle,"vendeur");
	    }
	}   
	
	 
   ?>
   <br><br><br><div align="right"><a href="supprimeremployer.php"><blink>pr�c�dent</blink></a>	<br><br>
  </body>
<html>











