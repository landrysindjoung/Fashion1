<html>
 <title>Un test d''acces � la base</title>
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
         if(!$result) echo"Impossible d'ins�rer, cette depense pourrait d�j� exister ";
         else{
            echo"insertion r�ussite";
	 }
	 
   ?>
   <br><div align="right"><a href="insererfournisseur.php"><blink>pr�c�dent</blink></a>	
  </body>
<html>