<html>
 <title>Un test d''acces à la base</title>
  <body background="fond9.jpg">
  <br><br>
  <?php 
    require("getChamps.php");
     $mat=$_REQUEST['idProduit']; 
    if($mat){
   
   $nom=$_REQUEST['nomP'];
   $prixs=doubleval($_REQUEST['prixSortie']);
   $prixe=doubleval($_REQUEST['prixEntree']);
   $fourn=$_REQUEST['idFournisseur'];
   $stock=$_REQUEST['idStock'];
   $qte=$_REQUEST['quantmin'];
   $rol=$_REQUEST['role'];
   
   $tuple="'$mat','$nom','$prixs','$prixe','$fourn','$qte','$stock','$rol'";
   $t="'$stock','$mat',0";
  if($prixs<$prixe) echo " le prix de sortie doit être supérieur au prix d'entrée";
  else{
    $requet="insert into produit values($tuple)";
    $result=mysql_query($requet);
    if(!$result) echo"Impossible d'insérer, vérifier que l'une des caractéristiques du produit n'a pas d'appostrophe; sinon,ce produit pourrait déjà exister ";
    else{ echo "<FONT color=\"red\"><h1><b>INSERTION REUSSIE</b></h1></font>";
   
          insertion2($t,"stock");
	   
	}
  }
}
	 
   ?>
   <br><div align="right"><a href="insererproduit.php"><blink>précédent</blink></a>	
  </body>
<html>











