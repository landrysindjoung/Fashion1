<html>
 <title>Un test d''acces � la base</title>
  <body background="fond9.jpg">
  <br><br>
  <?php 
    require("getChamps.php");
 
   $id=$_REQUEST['idcoutfixe'];
   $mont=doubleval($_REQUEST['montant']);

   $requet="update coutfixe set montant=$mont";
   $result=mysql_query($requet);
   if(!$result) echo"Impossible de modifier";
   else{ 
       echo "<FONT color=\"red\"><h1><b>OPERATION REUSSIE</b></h1></font>";
   }
	 
   ?>
   <br><div align="right"><a href="modifiercoutfixe.php"><blink>pr�c�dent</blink></a>	
  </body>
<html>











