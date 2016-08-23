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
         
  $m=doubleval($_REQUEST['montant']);
  $nom=$_REQUEST['nom'];
  $idc=$_REQUEST['idclient'];

echo" n:$nom  i:$idc ";

  $req="select soldecompte from client where idclient='$idc'";
  $res=mysql_query($req);
  $t=mysql_fetch_row($res);
  $n=$t[0];	   

      if($m>0){
	       if($n>$m){
		 $qu="update client set soldecompte=soldecompte-$m where idclient='$idc'and nomclient='$nom'";
		 $r=mysql_query($qu);
		 if($r){ 
		    $tuple="'$idc','$m','$annee-$moi-$jour','$heure:$minute:$seconde'";     
                    insertion($tuple,"versementclient");
		 }
		 else echo"<font color="."red"."size=5>revoir les informations entrees</font>";
                }
                else echo"<font color="."red"."size=5>le montant du versement est superieur au solde du compte de ce client</font>";
	}
	else
	  echo"<marquee ><font color="."maginta" ."size=5>veuillez entrer une quantité superieure à 0</font></marquee>";
	 
?>    	 
	
	 <br><div align="right"><a href="debitercompteclient.php"><blink>précédent</blink></a>	
	 
  </font>
  </b></body>
</html>