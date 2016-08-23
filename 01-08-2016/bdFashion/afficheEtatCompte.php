<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>affichage de l'etat du compte fournisseur</title>
</head>

<body background="fond9.jpg">

<?php 
 require("getChamps.php");
// $e1=$_REQUEST["etat1"];
 //$e2=$_REQUEST["etat2"];
 $id= $_REQUEST["idFournisseur"];
 $req="select 'soldeCompte,nom' from 'fournisseur' where idFournisseur='$id'";
 $result = mysql_query($req);
 affiche($result);

?>
 <?php 
   echo" <center><a href=\"etatCompteF.php\">RETOUR</a></center>";
   ?>
</body>
</html>
