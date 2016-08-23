<html>
 <title>Un test d''acces à la base</title>
  <body>
   <?php
   $con=mysql_connect("127.0.0.1","root","");
   if(!$con){echo "impossible de se conncter à la base";}
   mysql_select_db("projetin3");
   $requet = "select * from Employer";
   $result = mysql_query($requet);
   echo"<table border=2>";
   echo"<tr><td>MATRICULE</td><td>"."   "."NOM&PRENOM</td><td>ADRESSE</td><td>SALAIRE</td><td>FONCTION</td></tr>";
   while($chaine=mysql_fetch_row($result)){
   echo"<tr><td> $chaine[0]</td>  <td>$chaine[1]</td>  <td>$chaine[2]</td>  <td>$chaine[3]</td>   <td>$chaine[4]</td></tr><br>";}
   echo"</table>";
   ?>
  </body>
<html>