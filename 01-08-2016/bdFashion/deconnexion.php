<?php
    session_start();
    session_unset();
     require("getChamps.php");
?>
<html><head><title>liens vers les tables</title></head>
  <body background="images/acceuil1.jpg">
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<?php
  /************************page qui s'affiche à l'ouverture***************/
if(!isset($_POST['identifiant']) and !isset($_POST['pass'])){
  $util=getChamps("utilisateur","typeCompte");
?>
<!-- ici commence le formulaire d'identification du gérant -->

<form name="f1" action="identifieGerant.php" method="post">
<table border=0 width="20%" height="20%" background="images/table1.jpg" align="right">
    <tr height="20%">
        <td colspan=2><center><font color="cyan">Paramètres de connexion</font></center></td>
    </tr>
    <tr height="30%">
       <td width="50%"><b><font color="cyan">Login:</font></b> </td>
       <td width="50%"> <input type="text" name="identifiant" value=""></td>
    </tr>
    <tr height="30%">
       <td width="50%"><font color="cyan"><b>Password: </font></b></td>
       <td width="50%"> <input type="password" name="pass" value=""></td>
    </tr>

    <tr height="20%">
       <td width="50%"> </td>
       <td width="50%" align="right"> <input type="submit"  value="Connexion"></td>
    </tr>
    </table>
<?php
}
else{
    $id=$_POST['identifiant'];
    $pas=$_POST['pass'];
    $typ=$_POST['type'];
    $req1="select * from utilisateur where utilisateur='$id' and password='$pas'";
    $res1=mysql_query($req1);
    $mig=mysql_fetch_row($res1);
       if($mig){
?>
        <table border=0 width="25%" height="10%" background="images/table1.jpg" align="right">

    <tr height="30%">
       <td width="100%" align="center">
       <?php
	  if($mig[2]=="vendeur"){
       ?>
         <font color="red">Cliquer sur <a href="insererVente1.php"><b>SUIVANT</b></a> pour continuer</font>
       <?php
	  }
	  else{
	      if($mig[2]=="administrateur"){
       ?>
        <font color="red">Cliquer sur  <a href="pageacceuil.php"><b>SUIVANT</b></a> pour continuer</font>
       <?php
	     }
	     else{

	
             echo"  <font color=\"red\" height=\"22\"><center><b>les informations entrées ne sont pas correctes, veuillez contacter l'administrateur pour plus d'emples informations</b></</font>";
	    echo" <a href=\"identifieGerant.php\">RETOUR</a></center>";
	     }
	  }
       ?>
       </td>
    </tr>

    </table>
<?php

   //**************************à partir d'ici on peut déja déclarer les variable de session***************
   $_SESSION['idvendeur']=$id;
    }
    else{
?>


<?php
echo"  <font color=\"red\" height=\"22\"><center><b>les informations entrées ne sont pas correctes, veuillez contacter l'administrateur pour plus d'emples informations</b></font>";
echo" <a href=\"identifieGerant.php\">RETOUR</a> </center>";
    }
}
?>
<?php


?>

</body>
</html>
