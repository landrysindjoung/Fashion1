<html>
 <title>Un test d''acces � la base</title>
  <body background="fond9.jpg">
  <br><br>
  <?php 
    require("getChamps.php");      
   $mat=$_REQUEST['idcoutfixe'];  
   $nom=$_REQUEST['nature'];
   $mont=$_REQUEST['montant'];
          
         $tuple="'$mat','$nom','$mont'";     
         
         $requet="insert into coutfixe values($tuple)";
         $result=mysql_query($requet);
         if(!$result) echo"Impossible d'ins�rer, cette depense pourrait d�j� exister ";
         else{
            echo"insertion r�ussite";
	 }
	 
   ?>
   <br><div align="right"><a href="insererfournisseur.php"><blink>pr�c�dent</blink></a>	
  </body>
<html>