<?php
require ('../database/connect.php');
require ('ChatFunctions.php');

if(isset($_GET['sender']) && !empty($_GET['sender'])) {
	$sender=$_GET['sender'];
	if(isset($_GET['message']) && !empty($_GET['message']))
	{
		$message=$_GET['message'];
		if(send_msg($sender,$message))
		{
			echo "Message Sent";
		}
		else
			echo "Message wasn't sent";
	}
	else
		echo "NO mesage entered";
}
else
echo "NO name entered";
?>