<html>
 <title>Un test d''acces à la base</title>
  <body background="fond9.jpg">
  <br><br>
  <?php 
    require("getChamps.php");      
   $mat=$_REQUEST['iddepense'];  
   $nom=$_REQUEST['nature'];
   $mont=$_REQUEST['montant'];
    
         $date=getdate();
         $jour=$date['mday'];
         $moi=$date['mon'];
         $annee=$date['year'];
          
         $tuple="'$mat','$nom','$mont','$annee-$moi-$jour'";     
         
         $requet="insert into depenses values($tuple)";
         $result=mysql_query($requet);
         if(!$result) echo"Impossible d'insérer, cette depense pourrait déjà exister ";
         else{
            echo"insertion réussite";
	 }
	 
   ?>
   <br><div align="right"><a href="insererfournisseur.php"><blink>précédent</blink></a>	
  </body>
<html>