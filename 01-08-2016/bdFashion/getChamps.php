<html>
 <title>Un test d''acces à la base</title>
  <body>
   <?php
   //$n=$_REQUEST['nom'];
   //$m=$_REQUEST['motdepasse'];
  // echo"$n et $m<br>";
   $con=mysql_connect("127.0.0.1","root","FoSiMiLan");
   //if(!$con){echo "impossible de se conncter à la base";}
  // else{
  // require("lienVersTables.php");
   mysql_select_db("fashion");
   //}
   function getChamps($table,$attribut){
     $requet = "select distinct $attribut from $table order by $attribut";
     $result = mysql_query($requet);
	 return $result;
    }
    
    function getChamps3($table,$attribut,$condition){
     $requet = "select distinct $attribut from $table where $condition order by $attribut";
     $result = mysql_query($requet);
	 return $result;
    }
	
	function getChamps2($table,$k){
     $requet = "select distinct $k from $table";
     $result = mysql_query($requet);
	 return $result;
    }
   
    function insertion($tuple,$table){
   $requet="insert into $table values($tuple)";
   $result=mysql_query($requet);
   if(!$result) echo"Impossible d'insérer, ce $table pourrait déjà exister ";
   else echo "<FONT color=\"red\"><h1><b>INSERTION REUSSIE</b></h1></font>";
   }
   
   function insertion2($tuple,$table){
     $requet="insert into $table values($tuple)";
     $result=mysql_query($requet);
   }
   
 function supprimer($cle,$table){
   $requet="delete from $table where $cle";
   $result=mysql_query($requet); 
   if(!$result) echo"Impossible de supprimer, cet $table n'apparait pas dans la table ";
   else 
   echo "<FONT color=\"red\"><h1>SUPPRESSION REUSSIE</h1></font>";
  }
  
  function supprimer2($cle,$table){
   $requet="delete from $table where $cle";
   $result=mysql_query($requet); 
  }
    function affiche($requet){
   $resulte=mysql_query($requet);
   $ligne2=mysql_fetch_row($resulte);
   $n=sizeof($ligne2);
  
	 while($ligne2){
	               echo" <tr>";
	                for($i=0;$i<$n;$i++){
	                echo"<td align="."left"."><center><div align="."left> $ligne2[$i]</div></center></td>";
					}
					echo"</tr>";
					echo"<br>";
	                $ligne2=mysql_fetch_row($resulte);
	              }
	
	 }
  function affiche2($requet,$n){
   $resulte=mysql_query($requet);
   $ligne2=mysql_fetch_row($resulte);
  
	 while($ligne2){
	               echo" <tr>";
	                for($i=0;$i<$n;$i++){
	                echo"<td align="."left"."><center><div align="."left> $ligne2[$i]</div></center></td>";
					}
					echo"</tr>";
					echo"<br>";
	                $ligne2=mysql_fetch_row($resulte);
	              }
	
	 }	 
	 
 function plusancienproduit($idproduit){
	$q="select idstock, quantite,datearrivee from stock WHERE idproduit = '$idproduit'
 having datearrivee<= all(select datearrivee from stock where idproduit='$idproduit')";
	$n=mysql_query($q);
	$result=mysql_fetch_row($n);
	echo"dans la fct: idstock=$result[0],quantite==$result[1],datear=$result[2]";
	return $result;
	}
   function somme($idproduit){
      $q="select sum(quantite),idproduit from stock group by idproduit having idproduit='$idproduit'";
      $re=mysql_query($q);
      $l=mysql_fetch_row($re);
      return $l[0];
     }
   ?>
  </body>
<html>
