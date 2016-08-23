<html><head><title>liens vers les tables</title></head>
  <body background="fond9.jpg"> 
  <table align="center"><tr><td colspan=2 align="center"><font color="red"><u><h1>Spécifier soigneusement les ventes à supprimer</h1></u></font></td></tr>
</table>

  <br>
<?php
  require("getChamps.php");
  $tab=getChamps("vente","date"); 
  $table=getChamps("vente","heure");
  $tabl=getChamps("vente","idvendeur");
  
   $h=$_REQUEST['heure'];
   $d=date($_REQUEST['date']);
   $id=$_REQUEST['idproduit'];
   
   
   /*$req="select idproduit,quantite from vente where idproduit='$id' and date='$d' and heure='$h'";
   $res=mysql_query($req);
   $l1=mysql_fetch_row($res);
   $n=$l1[1];
   if(!$l1) echo" impossible";
   else{
         $id=$l1[0];*/
         $requ="select montant,idvendeur,quantite  from vente where idproduit= '$id'and date='$d'and heure='$h'"; 
	     $ress=mysql_query($requ);
		 if(!$ress)echo"requete impossible!";
		 else{
		    $l=mysql_fetch_row($ress);
		    $q=$l[0];
                $c=$l[1];
		    $n=$l[2];	        	
	          $cle="idproduit='$id' and date='$d' and heure='$h'";
                $rs=supprimer("$cle","vente");    
	          $qu="update stock set quantite=quantite+$n where idproduit='$id'";
	          $que="update vendeur set etat=etat-$q where idvendeur='$c'";
		    mysql_query($qu);
		    mysql_query($que);	
                echo "<FONT color=\"red\"><h1><b>SUPPRESSION VENTE REUSSIE</b></h1></font>";	  
            }
	//}      	   
?>    	 
	
	 <div align="right"><a href="supprimerVente.php"><blink>précédent</blink></a>
	 
  </font>
  </b></body>
</html>