<html>
 <title>inserrer un vendeur</title>
  <body background="fond9.jpg"><u>
   <br><br><br><br><br><br><br><br>
<table align="center"><tr><td colspan=2 align="center"><font color="red"><u><h1>Entrer les informations sur le vendeur!!</h1></u></font></td></tr>
</table>
  <?php 
    require("getChamps.php");
    ?>
<table align="center"><tr><td>
 <form action="afficheinsereremployer.php" method="post"> 
 idvendeur:</td><td><input type="texte" name="idvendeur" value=""></td></tr>
 <tr><td>nom & prenom:</td><td><input type="texte" name="nom" value=""></td></tr>
 <tr><td>etat compte</td><td><input type="texte" name="etat" value="0"></td></tr>
 <tr><td>adresse:</td><td><input type="texte" name="adresse" value=""></td></tr>
 <tr><td colspan=2 align="right"><input type="submit" name="submit" value="inserer"></td></tr>
	</form>
	</table>
	
		
  </body>
<html>











