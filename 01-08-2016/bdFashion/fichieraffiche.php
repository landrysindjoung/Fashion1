<html>
 <title>Un test d''acces à la base</title>
  <body>
   <?php
   function affiche($requet){
   $result=mysql_query($requet);
   $ligne=mysql_fetch_row($result);
   $n=sizeof($ligne);
  
	 while($ligne){
	               echo" <tr>";
	                for($i=0;$i<$n;$i++){
	                echo"<td><center> $ligne[$i]</center></td>";
					}
					echo"</tr>";
					echo"<br>";
	                $ligne=mysql_fetch_row($result);
	              }
	
	 }
   
   function insertion($tuple,$table){
   $requet="insert into $table values($tuple)";
   $result=mysql_query($requet);
   if(!$result) echo"Impossible d'insérer, cet $table pourrait déjà exister ";
   else echo "<FONT color=\"red\"><h1><b>INSERTION REUSSIE</b></h1></font>";
   }
   
 function supprimer($cle,$table){ 
   $requet="delete from $table where $cle";
   $result=mysql_query($requet);
   if(!$result) echo"Impossible de supprimer, cet $table n'apparait pas dans la table ";
   else echo "<FONT color=\"red\"><h1>SUPPRESSION REUSSIE</h1></font>";
   }
   //...............................................................................Partie principale du code..........................................
   $con=mysql_connect("127.0.0.1","root","");
   if(!$con){echo "impossible de se conncter à la base";}
   mysql_select_db("projetin3");
   $requet = "select * from Vente"; 
   $result = mysql_query($requet);
   
  /* echo"<center><table border=2>";
  // echo"<tr><td>MATRICULE</td><td>"."   "."NOM&PRENOM</td><td>ADRESSE</td><td>SALAIRE</td><td>FONCTION</td></tr>";
  /* while($chaine=mysql_fetch_row($result)){
   echo"<tr><td> $chaine[0]</td>  <td>$chaine[1]</td>  <td>$chaine[2]</td>  <td>$chaine[3]</td>   <td>$chaine[4]</td></tr><br>";}
    affiche($requet);
   echo"</table></center>";*/
   
   echo"<br><center><table border=2>";
    affiche($requet);
   echo"</table></center>";
   echo $date[0];
   
   ?>
  </body>
</html>