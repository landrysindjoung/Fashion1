TYPE=VIEW
query=(select `fashion`.`vente`.`idproduit` AS `idproduit`,sum(`fashion`.`vente`.`quantite`) AS `m` from `fashion`.`vente` where (`fashion`.`vente`.`date` between _latin1\'2009-11-06\' and _latin1\'2009-11-06\') group by `fashion`.`vente`.`idproduit`)
md5=8d0a17e59ccfa90c8f455a97252c16df
updatable=0
algorithm=0
definer_user=root
definer_host=localhost
suid=2
with_check_option=0
revision=1
timestamp=2009-11-06 05:20:26
create-version=1
source=(select idproduit,sum(quantite) as m from vente where vente.date between \'2009-11-06\' and \'2009-11-06\' group by idproduit )
