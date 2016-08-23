TYPE=VIEW
query=(select `fashion`.`produit`.`idproduit` AS `idstock`,`fashion`.`produit`.`idproduit` AS `idproduit`,0 AS `quantite` from (`fashion`.`produit` left join `fashion`.`stock` on((`fashion`.`produit`.`idproduit` = `fashion`.`stock`.`idproduit`))) where isnull(`fashion`.`stock`.`idproduit`))
md5=73a8c6901550f298a1297e002bd2d9bf
updatable=0
algorithm=0
definer_user=root
definer_host=localhost
suid=2
with_check_option=0
timestamp=2013-06-17 16:13:56
create-version=1
source=(SELECT produit.idproduit as idstock,produit.idproduit as idproduit, 0 as quantite FROM `produit` left join stock on produit.idproduit=stock.idproduit where stock.idproduit is NULL)
client_cs_name=utf8
connection_cl_name=utf8_general_ci
view_body_utf8=(select `fashion`.`produit`.`idproduit` AS `idstock`,`fashion`.`produit`.`idproduit` AS `idproduit`,0 AS `quantite` from (`fashion`.`produit` left join `fashion`.`stock` on((`fashion`.`produit`.`idproduit` = `fashion`.`stock`.`idproduit`))) where isnull(`fashion`.`stock`.`idproduit`))
