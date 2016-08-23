<html><head><title>liens vers les tables</title></head>
  <body background="fond9.jpg"> <font color="red">    
  
</font>
  <br><br>
<?php   
  require("getChamps.php");

$nom=$_REQUEST['nom'];
 $idc=$_REQUEST['idclient'];
if(($nom=="...")||($idc=="..."))
  echo"<font size=7>choisisez un client</font>";
else{

  $req1="select c.nomclient,s.montant,s.date from client as c,sortiesclient as s where c.idclient='$idc' and s.idclient='$idc'";
  $req2="select c.nomclient,v.montant,v.date from client as c,versementclient as v where c.idclient='$idc' and v.idclient='$idc'";  
	
  echo"<center><table border=2>";
  echo"<tr><td align="."center"." colspan=3 bgcolor="."white"."><font color="."red"."><u>achats effectues par ce client!</u></font></td></tr>";
  echo"<tr bgcolor="."yellow".">
  <td>nom du client</td>
  <td>montant achat</td>
  <td>date</td>
  </tr> ";
   affiche($req1);
   echo"</table></center><br><br>";
   
  echo"<center><table border=2>";
  echo"<tr><td align="."center"." colspan=3 bgcolor="."white"."><font color="."red"."><u>versements effectues par ce client!</u></font></td></tr>";
  echo"<tr bgcolor="."yellow".">
  <td>nom du client</td>
  <td>montant versement</td>
  <td>date</td>
  </tr> ";
   affiche($req2);
   echo"</table></center>";
}
?>
	 <br><div align="right"><a href="traceoperationclient.php"><blink>précédent</blink></a>	
	 
  </font>
  </b></body>
</html>