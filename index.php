<?php
include './Mysql/database.php';
include './Mysql/MysqlPDO.php';

$instance = MysqlPDO::getInstance($db['default']);
$lists = $instance->query("select * from socket");
include 'view/index_view.php';


