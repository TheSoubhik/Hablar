<?php
require ('../database/connect.php');
require ('ChatFunctions.php');

 $messages=get_msg();
 foreach($messages as $message)
 {
 	echo '<strong>'.$message['sender'].'</strong><br/>';
 	echo $message['message'].'<br /><br />';
 }
?>