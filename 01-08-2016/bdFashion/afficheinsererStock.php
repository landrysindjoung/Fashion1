<html><head><title>Un test d''acces à la base</title></head>
  <body background="fond9.jpg"> <b><u>veuillez spécifier soigneusement les valeurs à insérer</u><font color="red">  <br><br> 
  
</font>
  
<?php   
 require("getChamps.php");
  $tab=getChamps("produit","idproduit"); 
   $ids=$_REQUEST['idstock'];
   $n=intval($_REQUEST['quantité']);
   $pa=intval($_REQUEST['prixachat']);
   $datepr=date($_REQUEST['dateperemtion']);
   $idp=$_REQUEST['idproduit'];
   $date=getdate();
   $jour=$date['mday'];
   $moi=$date['mon'];
   $annee=$date['year'];
   $seconde=$date['seconds'];
   $minute=$date['minutes'];
   $heure=$date['hours'];  
   $coun="select count(idproduit) from stock group by idproduit having idproduit='$idp' "; 
   $res=mysql_query($coun);
   $l=mysql_fetch_row($res);
   $nbre=$l[0];
     if($nbre==2)echo"<blink><font color="."red"."size=5>Attention deux stocks sont déjà présent en magasin!</font></blink>";
   else
     if(($datepr>=($annee-$moi-$jour))&&($n<=0))echo"<blink><font color="."red"."size=5>Veuiilez bien spécifier les dates et les quantités entrées!</font></blink>";
	 else
      if($n>0){
	   $g="select prixvente from produit  where idproduit='$idp' "; 
	   $rr=mysql_query($g);
	   $ll=mysql_fetch_row($rr);
	   $pri=$ll[0];
	   if(!$pri)echo"<blink><font color="."red"."size=5>Ce produit ne se trouve pas votre liste!</font></blink>";
	   else{
	  $tuple="'$ids','$idp',$n,$pri,'$pa','$annee-$moi-$jour','$datepr'";   
      insertion($tuple,"stock");	  
	   }
	  
	  }
	 	 
	 
?>    	 
	
	 <br><br><br><div align="right"><a href="insererStock.php"><blink>précédent</blink></a>	<br><br>
	 
  </font>
  </b></body>
</html>