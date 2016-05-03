<?php
require 'BDD.class.php';
$base=new BDD('root','admin','192.168.1.40','agence',
array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8'));
if ((isset($_POST['valeur'])) &&  (!empty($_POST['valeur']))){
echo $base->tableau('SELECT pays FROM destinations WHERE pays like :pays ORDER BY  destinations.pays ASC ',
array('pays'=>'%'. htmlentities($_POST['valeur']).'%'));
}
// htmlentities($_POST['valeur']);
?>