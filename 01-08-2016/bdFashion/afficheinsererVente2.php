 require("getChamps.php");
$date;
$heure;
$nomclient;
$idvendeur;
 $req="select max(date),max(heure),nomclient,idvendeur from facture ";
   $reso=mysql_query($req);

      $land=mysql_fetch_row($reso)
	$date=$land[0];
	$heure=$land[1];
	$nomclient=$land[2];
	$idvendeur=$land[3];
