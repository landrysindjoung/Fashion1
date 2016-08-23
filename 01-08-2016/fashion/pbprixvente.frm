TYPE=VIEW
query=select `v`.`idproduit` AS `idproduit`,`v`.`idvendeur` AS `idvendeur`,`v`.`quantite` AS `quantite`,`v`.`date` AS `date`,`v`.`heure` AS `heure`,`v`.`montant` AS `montant`,`p`.`prixEntree` AS `prixEntree`,`p`.`prixSortie` AS `prixSortie` from `fashion`.`produit` `p` join `fashion`.`vente` `v` where ((`p`.`idproduit` = `v`.`idproduit`) and (`v`.`montant` < (`v`.`quantite` * `p`.`prixSortie`)))
md5=a78dd92e45913a7122cf0db7858a2ea8
updatable=1
algorithm=0
definer_user=root
definer_host=localhost
suid=2
with_check_option=0
timestamp=2013-04-04 11:20:42
create-version=1
source=SELECT v.*,p.prixEntree, p.prixSortie FROM `produit` as p,vente as v WHERE p.idproduit=v.idproduit and montant < (v.quantite * p.prixSortie)
client_cs_name=utf8
connection_cl_name=utf8_general_ci
view_body_utf8=select `v`.`idproduit` AS `idproduit`,`v`.`idvendeur` AS `idvendeur`,`v`.`quantite` AS `quantite`,`v`.`date` AS `date`,`v`.`heure` AS `heure`,`v`.`montant` AS `montant`,`p`.`prixEntree` AS `prixEntree`,`p`.`prixSortie` AS `prixSortie` from `fashion`.`produit` `p` join `fashion`.`vente` `v` where ((`p`.`idproduit` = `v`.`idproduit`) and (`v`.`montant` < (`v`.`quantite` * `p`.`prixSortie`)))
