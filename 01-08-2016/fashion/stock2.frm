TYPE=VIEW
query=(select `a`.`idproduit` AS `idproduit`,(`a`.`quantite` - `s`.`quantite`) AS `quantite` from `fashion`.`arrivages2` `a` join `fashion`.`sortie2` `s` where (`a`.`idproduit` = `s`.`idproduit`))
md5=777e39d3e2e5b472330e0bd58b353f8d
updatable=0
algorithm=0
definer_user=root
definer_host=localhost
suid=2
with_check_option=0
revision=1
timestamp=2009-12-23 19:33:55
create-version=1
source=(select a.idproduit,(a.quantite-s.quantite)as quantite from arrivages2 as a,sortie2 as s where a.idproduit=s.idproduit)
