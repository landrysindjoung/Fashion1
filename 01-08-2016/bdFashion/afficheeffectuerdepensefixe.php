<html>
 <title>Un test d''acces � la base</title>
  <body background="fond9.jpg">
  <br><br>
  <?php 
    require("getChamps.php");      
    $mat=$_REQUEST['iddepense'];  
    $mt=$_REQUEST['idcoutfixe'];
    
         $date=getdate();
         $jour=$date['mday'];
         $moi=$date['mon'];
         $annee=$date['year'];

         $tab="select montant,nature from coutfixe where idcoutfixe='$mt'"; 
         $resul=mysql_query($tab);
         $m=mysql_fetch_row($resul);
         $mont=$m[0];
         $nom=$m[1];
          
         $tuple="'$mat','$nom','$mont','$annee-$moi-$jour'";     
         
         $requet="insert into depenses values($tuple)";
         $result=mysql_query($requet);
         if(!$result) echo"Impossible d'ins�rer, cette depense pourrait d�j� exister ";
         else{
            echo"depenses effectu�e";
	 }
	 
   ?>
   <br><div align="right"><a href="effectuerdepensefixe.php"><blink>pr�c�dent</blink></a>	
  </body>
<html>