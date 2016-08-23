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
  $idc=$_REQUEST['idvendeur'];
  $idv=$_REQUEST['idversement'];

  if($idv=="" ) echo"entrer l'id du versement"; 
  else
   {
         
         $cle="idversement='$idv' and idvendeur='$idc'and date='$d'";   
      	
	  $t1="select montant from versementv where idversement='$idv' and idvendeur='$idc'and date='$d'";
	  $re1= mysql_query($t1);
	  $b1=mysql_fetch_row($re1);
         if($b1){
	  $f1=floatval($b1[0]);

          supprimer($cle,"versementv"); 

		 $qu="update vendeur set etat=etat+'$f1' where idvendeur='$idc'";
		 $r=mysql_query($qu);
		 if($r)
		   echo"<font color="."red"."size=5>bien</font>";  
		 else echo"<font color="."red"."size=5>pas bon</font>";
         }
	else
	  echo"<marquee ><font color="."maginta" ."size=5>revoir les informations entrees</font></marquee>";
    }
?>    	 
	
	 <br><div align="right"><a href="supprimerunversement.php"><blink>précédent</blink></a>	
	 
  </font>
  </b></body>
</html>