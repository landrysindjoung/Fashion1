<html>
<head>
<title>visualiser les arrivages</title>
</head>
<table align="center"><tr><td colspan=2><font color="red"><u><h1>Liste des arrivages!!</h1></u></font></td></tr>
</table>

<body background="fond9.jpg">
</font>
<center><table border=2 >
<?php 
      include("getChamps.php");
      $req="SELECT nomP, quantite, date, idarrivage
            FROM `arrivages` AS a, `produit` AS p
            WHERE a.idproduit = p.idproduit";
      //echo"<center><table border=2>";
      echo"<tr><td colspan=4 bgcolor="."white"."><marquee><font color="."red".">Arrivages de l'entreprise! </font></marquee></td></tr>";
	  echo"<tr bgcolor="."white".">
	      <td>nom du produit</td>
	      <td>quantite</td>
		  <td>date</td>		
		  <td>idarrivage</td>	  		  
	     </tr> ";
	    affiche2($req,4);
   echo"</table></center>";
	  echo "<blink><font color="."red"."size=3><br>clicker sur précédent pour effectuer une autre opération </font></blink>";  	 
?>    	 
	
	 <br><br><br><div align="right"><a href="supprimerArrivage.php"><blink>précédent</blink></a>	<br><br>
	 
  </font>
  </b></body>

</html>