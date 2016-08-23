<html>
<head>
 <title>Connection à la base de donnée</title></head>
  <body background="fond9.jpg"> 

<?php
$n=$_REQUEST['nom'];
$m=$_REQUEST['motdepasse'];
//echo"nom:$n<br>prenom:$m";
if(!(($n=="socale")||($n=="lebrun"))) echo"impossible de se connecter";
else {
 @$conn=mysql_connect("127.0.0.1","$n","$m");
 if(!$conn)echo"Connection à la base impossible!<br><blink><font color="."red"."><i>Login ou mot de passe incorrecte!</i></font><blink>";
 else{
  if($n=="eric"){
    echo"c moi";
?>
    <u><a href ="lienVersTables.php" target="fenetreTables">connection</a></u><br>
    <marquee direction="up"><font color="blue"> pour ce qui est de l'utilisation de cette base de donnée, la première chose à faire étant tout d'abord de se connecter, il serait judicieu de consulter l'administrateur de la base à chaque fois qu'un nouveau utilisateur se pronnonce poue son enregistrement. Ceci étant fait l'utilisation demande impeu d'attention lors de l'adressage des requettes à la base de donnée; sinon vous vous trouverez entrain de reprendre les opérations que vous aurez dût faire une seule fois. Deplus, prenez toujours la paine de bien lire les messages au niveau des pages d'adressage des requette. Tout en espérant que vous trouverez satisfaction avec ce nouvreau logitiel, nous vous remercions de nous faire part des dez ses limites.<br><br><br><font color="red"size=4>Les concepteurs!!!<br><br><br></font> </font></marquee><br><br><br> <br><br><br> 
    <u><a href ="fichierDeconnection.php" target="utilisateur">deconnection</a></u>
<?php
    //echo"<form action="."fichierConnectionV.php"." method="."post><br>"; 
    //</td><td><input type="text" name="base" value="administrateur">;
    //echo"<input type="."submit name="."submit" ."value="."conection".">";

  }
  else{
    echo"<form action="."fichierConnection.php"." method="."post><br>"; 
    //</td><td><input type="text" name="base" value="administrateur">;
    echo"<input type="."submit name="."submit" ."value="."conection".">";
 }
}
}
?>

</body>
</html>