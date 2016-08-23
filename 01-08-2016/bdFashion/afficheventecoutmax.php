<html>
 <title>Un test d''acces à la base</title>
  <body background="fond9.jpg">
  <br>
  
  <?php require("getChamps.php");
 $tab=getChamps("Vente","date"); 
 $tab1=getChamps("Vente","date");
    
   $d1=date($_REQUEST['date1']);
   $d2=date($_REQUEST['date2']);
   
   
   $r="create view tabo as select idclient,sum(montant) as m from sortiesclient where sortiesclient.date 
       between '$d1' and '$d2' group by idclient ";
	 mysql_query($r);	 
     $requet="select idclient,m from tabo having m >= all(select m from tabo)"; 	 
     $result = mysql_query($requet);
	 if(!$result)
	 echo"impossible d'effectuer cette requete!<br>";
	 else{

	$lignee=mysql_fetch_row($result);	 
	    $id=$lignee[0];
	    $requet1="select * from client where idclient='$id'";
	    $result1 = mysql_query($requet1);
	    if(!$result1)
	    echo"impossible d'effectuer cette requete a revoir!<br>";
	    else{

	      echo" <center><table border=5 whidth=80% cellspacing=3>";
	      echo"<tr> 
	      <td>nom du client</td>
              <td>idvendeur</td>
              <td>montant des ventes</td>
	      <td>adresse</td></tr>";
		
	      $ligne1=mysql_fetch_row($result1);
        	 echo"<tr><td>$ligne1[0]</td>
	         <td>$ligne1[2]</td>
		 <td>$lignee[1]</td>
	         <td>$ligne1[4]</td></tr></table>";
	    }
	  
	 }
	 
   $resq="drop view tabo";
   $res=mysql_query($resq);
   ?>
   <div align="right"><a href="venteCoutMax.php"><blink>précédent</blink></a>	<br><br>
  </body>
<html>











