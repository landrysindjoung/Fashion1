<html>
 <title>Un test d''acces à la base</title>
  <body background="fond9.jpg">
  <u>notifier le client sur lequel vous voulez avoir la trace des operations</u><br>
  <?php 
    require("getChamps.php");
	$tab=getChamps("client","nomclient"); 
    $tab1=getChamps("client","idclient");
    ?>

<form action="affichetraceoperationclient.php" method="post">  
 nom & prenom 
  <select name="nom"> 
  
  <?php
  while($ligne=mysql_fetch_row($tab))
    echo"<option  value=$ligne[0]>$ligne[0]</option>";
    echo "</select><br><br>";
	?>
 idclient
  <select name="idclient"> 
  
  <?php
  while($ligne1=mysql_fetch_row($tab1))
    echo"<option  value=$ligne1[0]>$ligne1[0]</option>";
    echo "</select><br><br>";
	?>
	<center><input type="submit" name="submit" value="visualiser"></center>
	</form>
  </body>
<html>











