<html>
 <title>Un test d''acces à la base</title>
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
         if(!$result) echo"Impossible d'insérer, cette depense pourrait déjà exister ";
         else{
            echo"insertion réussite";
	 }
	 
   ?>
   <br><div align="right"><a href="insererfournisseur.php"><blink>précédent</blink></a>	
  </body>
<html>