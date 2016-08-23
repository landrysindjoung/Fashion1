<html>
 <title>Un test d''acces à la base</title>
  <body background="fond9.jpg">
<br><br><br><br><br><br><br><br>
<table align="center"><tr><td colspan=2><font color="red"><u><h1>Spécifier la période!!</h1></u></font></td></tr>
</table>

   <?php  
   //...............................................................................Partie principale du code..........................................
   require("getChamps.php");
 $tab=getChamps("vente","date"); 
 $tab1=getChamps("vente","date");
 ?>
 <form action="affichebeneficestdc.php" method="post">    

<br>  date initiale<br>
<input type="text" name="date1" value="2009-11-23" >

<br>  date de fin<br>
<input type="text" name="date2" value="2009-12-27" >          

<br><br><center><input type="submit" name="submit" value="afficher"></center>
</form>  </body>
</html>