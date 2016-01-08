<?php
$db_host='localhost';
$db_user='root';
$db_pass='';
$db_name='chat2';

$connection=mysql_connect($db_host,$db_user,$db_pass);

$database=mysql_select_db($db_name,$connection);

if($connection)
{
	$feedback[] = "Connection Established";

	if($database)
	{
		$feedback[] = "Connected to db";
	}
	else
	{
		$feedback[] = "Not Connected to db";
	}
}
else
{
	$feedback[] = "Connection failed";
}

//var_dump($feedback);
?>