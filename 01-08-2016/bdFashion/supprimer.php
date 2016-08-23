<html>
 <title>Un test de suppression de la base</title>
  <body>
   <?php
   $con=mysql_connect("127.0.0.1","root");
   if(!$con){echo "impossible de se conncter à la base";}
   mysql_select_db("projetin3");
   
   $requet="delete from Employer where nom='lEVIS nzebop' ";
   $result=mysql_query($requet);
   if(!$result) echo"Impossible de supprimer, cet employer n'apparait pas dans la table ";
   else echo "<FONT color=\"red\"><h1>SUPPRESSION REUSSIE</h1></font>";
   ?>
  </body>
</html>