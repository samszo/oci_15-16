<?php
require 'BDD.class.php';
$base=new BDD('root','admin','192.168.1.40','agence',
array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8'));
echo$base->tableau('SELECT * FROM destinations WHERE codepays BETWEEN  :codepays and :codepays2',
array('codepays'=>'g%',
'codepays2'=>'k%'));

?>