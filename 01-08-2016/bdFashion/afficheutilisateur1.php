<html>
<head>
 <title>Connection � la base de donn�e</title></head>
  <body background="fond9.jpg"> 

<?php
$n=$_REQUEST['nom'];
$m=$_REQUEST['motdepasse'];
//echo"nom:$n<br>prenom:$m";

if(($n=="root")||($n=="fokam"))
  if(!($m=="fokam")){
      echo"impossible de se connecter";
      echo"<br><a href="."utilisateur.php"." target="."utilisateur"."><blink>pr�c�dent</blink></a><br><br>";
  } 
  else{
    echo"<form action="."fichierConnection.php"." method="."post><br>"; 
    //</td><td><input type="text" name="base" value="administrateur">;
    echo"<input type="."submit name="."submit" ."value="."conection".">";

 }
else{

if(!(($n=="socale")||($n=="casimir"))) 
{
      echo"impossible de se connecter";
      echo"<br><a href="."utilisateur.php"." target="."utilisateur"."><blink>pr�c�dent</blink></a><br><br>";
  } 
else {
 @$conn=mysql_connect("127.0.0.1","$n","$m");
 if(!$conn)
 {
      echo"<br><a href="."utilisateur.php"." target="."utilisateur"."><blink>pr�c�dent</blink></a><br><br>";
      echo"Connection � la base impossible!<br><blink><font color="."red"."><i>Login ou mot de passe incorrecte!</i></font><blink>";
}
 else{
  if($n=="casimir"){
    echo"c moi";
 
  ?>
    <u><a href ="manipulationVendeur.php" target="utilisateur">connection</a></u><br>
    <marquee direction="up"><font color="blue"> pour ce qui est de l'utilisation de cette base de donn�e, la premi�re chose � faire �tant tout d'abord de se connecter, il serait judicieu de consulter l'administrateur de la base � chaque fois qu'un nouveau utilisateur se pronnonce poue son enregistrement. Ceci �tant fait l'utilisation demande impeu d'attention lors de l'adressage des requettes � la base de donn�e; sinon vous vous trouverez entrain de reprendre les op�rations que vous aurez d�t faire une seule fois. Deplus, prenez toujours la paine de bien lire les messages au niveau des pages d'adressage des requette. Tout en esp�rant que vous trouverez satisfaction avec ce nouvreau logitiel, nous vous remercions de nous faire part des dez ses limites.<br><br><br><font color="red"size=4>Les concepteurs!!!<br><br><br></font> </font></marquee><br><br><br> <br><br><br> 
    <u><a href ="fichierDeconnection.php" target="utilisateur">deconnection</a></u>
  <?php
 }
 else{
    echo"<form action="."fichierConnection.php"." method="."post><br>"; 
    //</td><td><input type="text" name="base" value="administrateur">;
    echo"<input type="."submit name="."submit" ."value="."conection".">";
 }
}
}
}
?>

</body>
</html>