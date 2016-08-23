TYPE=VIEW
query=(select `projetin3`.`vente`.`idclient` AS `idclient`,sum(`projetin3`.`vente`.`prix`) AS `m` from `projetin3`.`vente` where (`projetin3`.`vente`.`date` = _utf8\'$d\') group by `projetin3`.`vente`.`idclient` having (`projetin3`.`vente`.`idclient` <> _latin1\'...\'))
md5=8b5d7f3abfae8ea74e86a8c5ef2f0ff7
updatable=0
algorithm=0
definer_user=root
definer_host=localhost
suid=2
with_check_option=0
revision=1
timestamp=2008-05-27 08:25:28
create-version=1
source=(select idclient,sum(prix) as m\n                     from vente\n                     where vente.date=\'$d\' \n                     group by idclient \n                     having idclient<>\'...\')
