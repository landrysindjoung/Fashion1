<html><head><title>liens vers les tables</title></head>
  <body background="fond9.jpg"> <font color="red">    
  
</font>
  <br><br>
<?php   
  require("getChamps.php");
  $date=getdate();
  $jour=$date['mday'];
  $moi=$date['mon'];
  $annee=$date['year'];
  $seconde=$date['seconds'];
  $minute=$date['minutes'];
  $heure=$date['hours'];   
         
  
  $d=$_REQUEST['date1'];
  $idc=$_REQUEST['idFournisseur'];
  $idv=$_REQUEST['numvers'];

  if($idv=="" ) echo"entrer l'id du versement"; 
  else
   {
         
         $cle="numvers='$idv' and idFournisseur='$idc'and date='$d'";   
      	
	  $t1="select montant from versementf where numvers='$idv' and idFournisseur='$idc'and date='$d'";
	  $re1= mysql_query($t1);
	  $b1=mysql_fetch_row($re1);
         if($b1){
	  $f1=floatval($b1[0]);

          supprimer($cle,"versementf"); 

		 $qu="update fournisseur set soldeCompte=soldeCompte+'$f1' where idFournisseur='$idc'";
		 $r=mysql_query($qu);
		 if($r)
		   echo"<font color="."red"."size=5>bien</font>";  
		 else echo"<font color="."red"."size=5>pas bon</font>";
         }
	else
	  echo"<marquee ><font color="."maginta" ."size=5>revoir les informations entrees</font></marquee>";
    }
?>    	 
	
	 <br><div align="right"><a href="supprimerunversementf.php"><blink>précédent</blink></a>	
	 
  </font>
  </b></body>
</html>