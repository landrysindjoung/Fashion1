<html>
 <title>Un test d''acces � la base</title>
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
  if($prixs<$prixe) echo " le prix de sortie doit �tre sup�rieur au prix d'entr�e";
  else{
    $requet="insert into produit values($tuple)";
    $result=mysql_query($requet);
    if(!$result) echo"Impossible d'ins�rer, v�rifier que l'une des caract�ristiques du produit n'a pas d'appostrophe; sinon,ce produit pourrait d�j� exister ";
    else{ echo "<FONT color=\"red\"><h1><b>INSERTION REUSSIE</b></h1></font>";
   
          insertion2($t,"stock");
	   
	}
  }
}
	 
   ?>
   <br><div align="right"><a href="insererproduit.php"><blink>pr�c�dent</blink></a>	
  </body>
<html>











