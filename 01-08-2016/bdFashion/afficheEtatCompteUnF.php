<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>affichage de l'etat du compte fournisseur</title>
</head>

<body background="fond9.jpg">

<?php 
 require("getChamps.php");
 $id=$_REQUEST['idFournisseur'];
 $req="select nom,soldeCompte from fournisseur where idFournisseur='$id'";
 $result = mysql_query($req);
 if(!$req) echo"faux";
 else {
 echo" <center><table border=5 whidth=80% >";
	echo"<tr> 
	    <td bgcolor="."white"."><font color="."blue" ."size=7>nom du fournisseur</td>
		<td bgcolor="."white"."><font color="."blue" ."size=7>solde du compte</td>
		</tr>";
	   while($ligne=mysql_fetch_row($result)){	 
	   echo"<tr>";
	 	echo"<td>$ligne[0]</td>
	         <td>$ligne[1]</td></tr>";
	  }
 }
?>
<br><a href="etatComptesF.php"target="fenetreTables"><blink>pr�c�dent</blink></a><br><br>

</body>
</html>
