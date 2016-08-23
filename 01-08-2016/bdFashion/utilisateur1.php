<html>
<head>
 <title>Connection à la base de donnée</title></head>
  <body background="fond9.jpg"> 
<table>   
 <form action="utilisateur1.php" method="post"><br>  
  <tr>
   <td>login:</td><td><input type="text" name="nom"></td>
  </tr>
  <tr>
   <td>password:</td><td><input type="password"  name="motdepasse"></td>
   </tr>
   <tr><td colspan=2 align="right">  <input type="submit" name="submit" value="valider"> </td></tr> 
</form>
</table>
<?php

$n=$_REQUEST['nom'];
$m=$_REQUEST['motdepasse'];
//echo"nom:$n<br>prenom:$m";
@$conn=mysql_connect("127.0.0.1","$n","$m");
if(!$conn)echo"Connection à la base impossible!<br><blink><font color="."red"."><i>Login ou mot de passe incorrecte!</i></font><blink>";
else{

echo"<form action="."fichierConnection.php"." method="."post><br>"; 
//</td><td><input type="text" name="base" value="administrateur">;
echo"<input type="."submit name="."submit" ."value="."conection".">";

}
?>

</body>
</html>