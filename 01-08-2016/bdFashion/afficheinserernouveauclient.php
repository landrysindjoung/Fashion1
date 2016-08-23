<html>
 <title>Un test d''acces à la base</title>
  <body background="fond9.jpg">
  <br><br>
  <?php 
    require("getChamps.php");
   $tab=getChamps("Vente","date"); 
   $tab1=getChamps("Vente","date");   
   $nom=$_REQUEST['nomclient'];
   $idc=$_REQUEST['idclient'];
   $idv=$_REQUEST['idvendeur'];
   $adr=$_REQUEST['adresse'];
   $sldcpte=doubleval($_REQUEST['soldecompte']);
     if($nom=="")echo"Veuillez entrer un nom valide";
	 else 
	  if($idc=="")echo"Veuillez entrer une identité valide du client";
  	    else 
	    if($idv=="")echo"Veuillez entrer une identité valide de vendeur";
	      else{
	        $tuple="'$nom','$idc','$idv',$sldcpte,'$adr'";
		insertion($tuple,'client');
	      }
	   
	
	 
   ?>
   <br><br><br><div align="right"><a href="inserernouveauclient.php"><blink>précédent</blink></a>	<br><br>
  </body>
<html>











