<html>
 <title>Un test d''acces à la base</title>
  <body>
   <?php
   $con=mysql_connect("127.0.0.1","root");
   if(!$con){echo "impossible de se conncter à la base";}
   mysql_select_db("projetin3");
   
   $requet="insert into Employer values('02en011','Nicolas Sarkozi','74094917',20000,'agentMaintenance' )";
   $result=mysql_query($requet);
   if(!$result) echo"Impossible d'insérer, cet employer pourrait déjà exister ";
   else echo "<FONT color=\"red\"><h1>INSERTION REUSSIE</h1></font>";
   ?>
  </body>
</html>