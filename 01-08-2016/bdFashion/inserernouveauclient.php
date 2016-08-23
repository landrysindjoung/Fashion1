<html>
 <title>Un test d''acces à la base</title>
  <body background="fond9.jpg">
  <u>bien vouloir saisir les informations sur le client</u>
  <br><br>
  <?php 
    require("getChamps.php");
    $table=getChamps("vendeur","idvendeur");
    $tab=getChamps("Vente","date"); 
    $tab1=getChamps("Vente","date");
   ?>
   
   <table>

 <form action="afficheinserernouveauclient.php" method="post">  
 <tr><td>nomclient:</td><td><input type="texte" name="nomclient" value=""></td></tr>
 <tr><td>idclient:</td><td><input type="texte" name="idclient" value=""></td></tr>
 <tr><td>idvendeur:</td><td><select name="idvendeur"> 
  <option value="">...</option>"
  <?php
    while($ligne1=mysql_fetch_row($table))
    echo"<option value=$ligne1[0]>$ligne1[0]</option>";
    echo "</select></td></tr>";	
   ?>
 <tr><td>adresse:</td><td><input type="texte" name="adresse" value=""></td></tr>
 <tr><td>montant du compte:</td><td><input type="texte" name="soldecompte" value="0"></td></tr>
 <tr><td colspan=2 align="right"><input type="submit" name="submit" value="inserer"></td></tr>
	</form>
	</table>	
   
  </body>
<html>











