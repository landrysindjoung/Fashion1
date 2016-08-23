<?php
    session_start();
     require("getChamps.php");
?>
<html><head><title>liens vers les tables</title></head>
  <body background="images/acceuil1.jpg">
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php
      if(isset($_SESSION['idvendeur'])){
  ?>
<?php
  /************************page qui s'affiche à l'ouverture***************/
if(!isset($_POST['ancien']) and !isset($_POST['nouveau1'])){
  $util=getChamps("utilisateur","typeCompte");
?>
<!-- ici commence le formulaire de modification du mot de pass -->

<form name="f1" action="passGerant.php" method="post">
<table border=0 width="%" height="3	0%" background="images/table1.jpg" align="right">
    <tr height="20%">
        <td colspan=2><center><font color="cyan">Modification du password du gérant</font></center></td>
    </tr>
    <tr height="20%">
       <td width="50%"><b><font color="cyan">Ancien mot de pass:</font></b> </td>
       <td width="50%"> <input type="password" name="ancien" value=""></td>
    </tr>
    <tr height="20%">
       <td width="50%"><font color="cyan"><b>Nouveau mot de pass: </font></b></td>
       <td width="50%"> <input type="password" name="nouveau1" value=""></td>
    </tr>
    <tr height="20%">
       <td width="50%"><font color="cyan"><b>Retapez le nouveau mot de pass: </font></b></td>
       <td width="50%"> <input type="password" name="nouveau2" value=""></td>
    </tr>

    <tr height="20%">
       <td width="50%"> </td>
       <td width="50%" align="right"> <input type="submit"  value="Appliquer"></td>
    </tr>
    </table>
<?php
}
else{
    $passG=$_SESSION['passG'];
    $id=$_SESSION['idvendeur'];
    $ancien=$_POST['ancien'];
    $nouveau1=$_POST['nouveau1'];
    $nouveau2=$_POST['nouveau2'];
?>
      <table border=0 width="25%" height="10%" background="images/table.jpg" align="right">

    <tr height="30%">
       <td width="100%" align="center">
         

<?php    if($ancien!=$passG){?>
  <font color="red"><a href="manipulationVendeur.php"><b>SUIVANT</b></a> >>>>> </font><br>
  <font color="red"><a href="passGerant.php"><b>Mot De Pass</b></a></font>
  <font color="red">à recommencer</font>
<?php
    }
    else{
	if($nouveau1!=$nouveau2){
?>
<font color="red">Cliquer sur <a href="manipulationVendeur.php"><b>SUIVANT</b></a> pour continuer</font><br>
  <font color="red">Changer votre <a href="passGerant.php"><b>Mot De Pass</b></a></font>
  <br><font color="white">revérifiez la valeur du nouveau mot de pass</font>


<?php          
	}
	else{
	    $red="UPDATE utilisateur SET password='$nouveau1' WHERE utilisateur='$id'";
	    $resd=mysql_query($red);
	    if($resd){
 ?>
   <font color="white">Les modifications ont été apportée avec succès, veuillez vous <a href="deconnexion.php">déconecter</a> pour vous reconnecter à nouveau </font>
  
 
<?php	        
	    }
	    else{
?>
  <font color="red">Cliquer sur <a href="manipulationVendeur.php"><b>SUIVANT</b></a> pour continuer</font><br>
  <br><font color="white">les modifications n'ont pas pu être apportée veuillez contacter l'administrateur pour plus d'informations</font>


<?php	        echo"<br><font color=\"white\">la modification n'a pas pue être apportée</font>";
	    }
	}
    }
}
?>
       </td>
    </tr>

    </table>


<?php
}
else{
   echo "<br><br><br><br><br><br><br><br><br><font color=\"red\"> vous ne disposez pas des autorisations nécessaire pour accéder à cette page, veuillez contacter l'administrateur pour plus d'informations</font>";
}
?>
</body>
</html>    	


