TYPE=VIEW
query=(select `projetin3`.`vente`.`idclient` AS `idclient`,sum(`projetin3`.`vente`.`prix`) AS `m` from `projetin3`.`vente` where (`projetin3`.`vente`.`date` = _utf8\'2008-05-25\') group by `projetin3`.`vente`.`idclient` having (`projetin3`.`vente`.`idclient` <> _latin1\'...\'))
md5=5866660787d372c0bd33a6d11df0637f
updatable=0
algorithm=0
definer_user=root
definer_host=localhost
suid=2
with_check_option=0
revision=1
timestamp=2008-05-27 10:07:40
create-version=1
source=(select idclient,sum(prix) as m\n                     from vente\n                     where vente.date=\'2008-05-25\' \n                     group by idclient \n                     having idclient<>\'...\')
