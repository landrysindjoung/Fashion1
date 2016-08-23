<html>
 <title>Un test d''acces à la base</title>
  <body background="fond9.jpg">
  <br><br>
  <?php 
    require("getChamps.php");
 $tab=getChamps("Vente","date"); 
 $tab1=getChamps("Vente","date");
   ?>
  <form action="affichedatePeremProche.php" method="post"><br>    
  Date d'à compter
   <br>
  <input type="texte" name="date1" value=""> 
    </select><br><br>
    <center><input type="submit" name="submit" value="rechercher"></center>
</form>
   
  </body>
<html>











