<html>
 <title>Un test d''acces à la base</title>
  <body background="fond9.jpg">
  <br><br>
  <?php 
    require("getChamps.php");
 
   $id=$_REQUEST['date1'];
   $pvente=$_REQUEST['prixVente'];

   $requet="update produit set nomP='$pvente' where idproduit='$id'";
   
      $result=mysql_query($requet);
      if(!$result) echo"Impossible de modifier";
      else 
        echo "<FONT color=\"red\"><h1><b>OPERATION REUSSIE</b></h1></font>";
      
   
   ?>
   <br><div align="right"><a href="modifienomproduit.php"><blink>précédent</blink></a>	
  </body>
<html>











