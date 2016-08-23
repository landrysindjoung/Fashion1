<html>
<head>
 <title>déConnection de la base de donnée</title></head>
  <body background="arrièreplan.jpg"> 
  <marquee direction="up"><font color="green" size=6>  
     Tout en espérant que nous ne vous avons pas déçu, nous vous remercions de toujours nous faire confiance et à très bientôt lors de votre prochaine visite bay!!! </marquee>
  </font>
  <br><br>
  <?php
    require("getChamps.php");	
	mysql_close($con);?>
   <u><a href ="utilisateur.php" target="utilisateur">connection</a></u>
   <u><a href ="fenetreTables.php" target="_top">clicquez pour quitter</a></u>
</body>
</html>