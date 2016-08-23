<?php
 session_start();
   $dat=$_SESSION['dat'];
   $heur=$_SESSION['heur'];
   $idvendeur=$_SESSION['idvendeur'];
    echo"$idvendeur";
 ?>
<html><head><title>liens vers les tables</title></head>
  <body background="fond9.jpg"> <b><u>veuillez spécifier soigneusement la vente à supprimer</u><font color="red">
</font>
  <br>
<?php
  require("getChamps.php");
  /*
$tab=getChamps("vente","date");
  $table=getChamps("vente","heure");
  $tabl=getChamps("vente","idvendeur");

   $h=$_REQUEST['heure'];
   $d=date($_REQUEST['date']);
*/
   $c=$_REQUEST['idproduit'];

   $re="select idproduit,quantite,montant,idvendeur from vente where idproduit='$c' and date='$dat' and heure='$heur'";

$rs=mysql_query($re);
   $l1=mysql_fetch_row($rs);
   
   if(!$l1) echo" impossible";
   else{ 
         /*
$id=$l1[0];
         $requ="select montant from vente where idproduit= '$id'and date='$dat'and heure='$heur'";
	     $ress=mysql_query($requ);
		 if(!$ress)echo"requete impossible!";
		 else{
		    $l=mysql_fetch_row($ress);
		    $q=$l[0];
*/

	        $n=$l1[1];
   		$q=$l1[2];
   		$v=$l1[3];	
	        $cle="idproduit='$c' and date='$dat' and heure='$heur'";
            $rst=supprimer("$cle","vente");
	        $qu="update stock set quantite=quantite+$n where idproduit='$c'";
	        $qua="update vendeur set etat=etat-$q where idvendeur='$idvendeur'";
			mysql_query($qu);
			mysql_query($qua);	
	}      	
?>    	 
	
	 <div align="right"><a href="genererfacture.php"><blink>précédent</blink></a>
	 
  </font>
  </b></body>
</html>
