<?php
    session_start();
?>

<html><head><title>Arrivages</title></head><body background="images/acceuil1.jpg"> <br><br>
<center>

 <?php
      if(isset($_SESSION['idvendeur'])){
  ?>

<table border=3 cellpadding=1 background="images/table.jpg"><tr><td colspan=1 align="center" >
     <b><u><font color="red">OPERATIONS VENDEURS </font></u></b><font color="blue"><I><br><br></td></tr>
     <tr><td align="center"><b><u>Fournisseur</u></b><br><br></td></tr>	
     <tr><td><a href="listefournisseur.php">lister l'ensemble des fournisseurs</a>	</td></tr>
     <tr><td><a href="insererfournisseur.php">inserer un fournisseur</a></td></tr>	 
     <tr><td><a href="etatComptesF.php">etat comptes d'un fournisseur</a><br></td>
     <tr><td align="center"><b><u>PRODUIT</u></b><br><br></td></tr>	     
     <tr><td><a href="listeproduit.php">afficher la fiche des produits</a>	<br></tr>     

     <tr><td><a href="insererproduit.php">inserrer un nouveau produits</a>	<br></tr> 
    
     <tr><td align="center"><b><u>ARRIVAGES</u></b><br><br></td></tr>	     
     <tr><td><a href="enregistrerArrivage.php">enregistrer une entrée</a></td></tr>	
     <tr><td><a href="visualiserArrivagePeriode.php">visualiser les arrivages d'une periode</a></td></tr>	
     <tr><td align="center"><b><u>VENDEURS</u></b><br></td></tr>	     
     <tr><td><br><a href="listeemployers.php">afficher la fiche des vendeurs</a>	<br></tr>
     <tr><td align="center"><b><u>VENTES</u></b><br><br></td></tr>	     
     <tr><td><a href="insererVente1.php">inserer une nouvelle vente</a><br></td></tr>
     <tr><td><a href="listeVentes.php">lister les ventes effectuées </a><br></td></tr>
     <tr><td><a href="listeFactures.php">Visualiser les factures d'une période</a><br></td></tr>
     <tr><td><a href="quantiteventeproduit.php">somme quantite vendu par produit </a><br></td></tr>
     <tr><td align="center"><b><u>STOCK</u></b><br><br></td></tr>
     <tr><td><a href="afficheTableStock.php">Afficher la fiche de stock </a>	<br></td>	
     <tr><td><a href="stockProduit.php">Afficher la quantite en stock d'un produit</a><br></td></tr>
     <tr><td><a href="produitEnRupture.php">Produit en rupture de stock</a><br></td></tr>	
     <tr><td align="center"><b><u>VERSEMENT VENDEUR</u></b><br><br></td></tr>
     <tr><td><a href="effectuerunversement.php">effectuer un versement</a><br></tr>	 
     <tr><td><a href="visualiserversement.php">visualiser les versement d'un vendeur</a><br></td></tr>
     <tr><td align="center"><b><u>VERSEMENT FOURNISSEUR</u></b><br><br></td></tr>
     <tr><td><a href="effectuerunversementf.php">effectuer un versement</a><br></tr>	 
     <tr><td><a href="visualiserversementf.php">visualiser les versement d'un fournisseur</a><br></td></tr>

</i></font>
 </table>
<a href="deconnexion.php"><font color="blue" target="fenetreTables">déconnexion</font></a>

<?php
}
else{
   echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><font color=\"red\"> vous ne disposez pas des autorisations nécessaire pour accéder à cette page, veuillez contacter l'administrateur pour plus d'informations</font>";
}
?>
 </center>
 </body>
</html>
