<?php

function db_init()
{
	$config['db'] = array (
	'host' => 'localhost',
	'username' => 'root',
	'password' => '',
	'dbname' => 'chat2'
);
$db = new PDO('mysql:host='.$config['db']['host'].';dbname='.$config['db']['dbname'],$config['db']['username'],$config['db']['password']);
return $db;
}
?>