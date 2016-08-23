<html>
 <title>Un test d''acces à la base</title>
  <body background="fond9.jpg">
   <?php  
   //...............................................................................Partie principale du code..........................................
   require("getChamps.php");
 $tab=getChamps("versementf","date"); 
 $tab1=getChamps("versementf","date");
 $tab2=getChamps("versementf","idFournisseur");
 ?>
 <form action="affichevisualiserversementf.php" method="post">    
  Intervalle de temps des versements  
   <br><br>
  date initiale<br>
  <select name="date1"> 
  <?php
  while($ligne=mysql_fetch_row($tab))
    echo"<option  value=$ligne[0]>$ligne[0]</option>";
    echo "</select><br><br>";
	?>
	<br>
	date de fin<br>
	<select name="date2"> 
  <?php
  while($ligne1=mysql_fetch_row($tab1))
    echo"<option  value=$ligne1[0]>$ligne1[0]</option>";
    echo "</select><br>";
	?>
<br> idFournisseur<br>
  <select name="idFournisseur">

   <?php
   while($ligne2=mysql_fetch_row($tab2))
    echo"<option  value=$ligne2[0]>$ligne2[0]</option>";
    echo "</select><br><br>";
	?>
    
    <center><input type="submit" name="submit" value="afficher"></center>
</form>  

 <?php 
   echo" <center><a href=\"manipulationVendeur.php\">RETOUR</a></center>";
   ?></body>
</html>