<?php

require ('../database/connect2.php');

 function get_msg()
 {
 	$flag = 0;
 	$db = db_init();
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // setting error mode for pdo
	$query = $db->prepare("SELECT `Sender`,`Message` FROM `chat` ORDER BY `Msg_ID` DESC");
	
	try {					// implementing try catch and handling exception 
		$query->execute();
		if ($query->rowCount()>0)
			$flag = 0;
		else
			$flag = 1;
	} catch (PDOException $e) {
		die($e->getMessage());
	}
	$messages = array();
	while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
		$messages[]=array('sender'=>$row['Sender'],'message'=>$row['Message']);
	}
	return $messages;
 }

function send_msg($sender,$message)
{
	if(!empty($sender) && !empty($message))
	{
		$sender=mysql_real_escape_string($sender);
		$mesage=mysql_real_escape_string($message);
		$flag = 0;

		$db = db_init();
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // setting error mode for pdo

		$query = $db->prepare("INSERT INTO `chat2`.`chat` VALUES (null, :sender, :message )");
		
		$query->bindValue(':sender',  $sender , PDO::PARAM_STR);
		$query->bindValue(':message',  $message , PDO::PARAM_STR);
		
		try {					// implementing try catch and handling exception 
			$query->execute();
			$flag = 1;
		} catch (PDOException $e) {
			die($e->getMessage());
		}

			if($flag == 1)
			{
				return true;
			}
			else
			{
				echo "not inserted";
				return false;
			}
	}
	else
		return false;
}
?>
