<?php
  define("host","localhost");
  define("user","root");
  define("pass","FoSiMiLan");
   

  
  
  function connex($base)
{
  $conex=@mysql_connect(host,user,pass);

   $idbase=@mysql_select_db($base);
  if(!$conex|!$idbase)
  {
    echo "<script type=text/javascript>";
    echo "alert('Connexion Impossible � la base  $base')</script>";
    //retourne null si la connection � la bd a �chou�e
    $conex="null";
  }
  
  return $conex;
}
/*$numero=1;
 $con=connex("fashion");
 $requete= "SELECT * from facture where `numero`=$numero";
 $result = mysql_query($requete,$con);
 if($result){
     while($mig=mysql_fetch_row($result)){
        echo $mig[5];
     }
}
 else{
      echo "<script type=text/javascript>";
    echo "alert('aucun r�sultat')</script>";
    //retourne null si la connection � la bd a �chou�e

    }*/
?>
