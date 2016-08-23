<html><head><title>liens vers les tables</title></head>
  <body background="fond9.jpg"> <font color="red">    
  
</font>
  <br><br>
<?php   
  require("getChamps.php");
  $tab=getChamps("produit","idproduit"); 
   $anc=floatval($_REQUEST['ancien']);  
   $nouv1=floatval($_REQUEST['nouveau1']); 
   $nouv2=floatval($_REQUEST['nouveau2']); 
   $s=$_REQUEST['idproduit'];
   
      if($nouv1<=0) echo"<font color="."red"."size=5><blink>Vérifier le nouveau prix de sortie!</blink></font>";
      else{
          $req1="select prixSortie from produit where idproduit='$s'";
	  $res1=mysql_query($req1);
	  $t1=mysql_fetch_row($res1);
          $a=$t1[0];

          $req2="select prixEntree from produit where idproduit='$s'";
	  $res2=mysql_query($req2);
	  $t2=mysql_fetch_row($res2);
          $a2=$t2[0];
          
          if($a==$anc)
            if($a2>$nouv1) echo" le prix de sortie est inférieur au prix d'entrée";
            else
  	      if($nouv1==$nouv2){
	        $qu="update produit set prixSortie=$nouv1 where idproduit='$s' ";
                mysql_query($qu);
                echo"modification reussite";
	      }
	      else
		echo"<marquee ><font color="."maginta" ."size=5>revoir les nouveaux prix de sortie !</font></marquee>";
          else
            echo"<marquee ><font color="."maginta" ."size=5>l'ancien prix de sortie ne correspond pas au prix de la base!!! </font></marquee>";
      }
?>    	 
	
	 <br><div align="right"><a href="modifierPrixSortie.php"><blink>précédent</blink></a>	
	 
  </font>
  </b></body>
</html>