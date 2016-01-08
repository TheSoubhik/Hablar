<?php

//require_once('includes/core.inc.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Chat App
	</title>
	<link rel="stylesheet" type="text/css" href="public/css/main.css">
</head>
<body>
<div id="input">
<div id="messages">

</div>
 <div id="feedback"></div>

<form action="#" method="get" id="form_input">
	<label>Enter Name :<input type="text" name="sender" id="sender"> </label><br>
	<label>Enter Message :<br><textarea id="message" name="message" cols="25" rows="4"></textarea></label><br>
	<input type="submit" value="Send Message" name="send" id="send">
</form>

</div>

<script type="text/javascript" src="javascript/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="javascript/js/auto_chat.js"></script>
<script type="text/javascript" src="javascript/js/send.js "></script>
</body>
</html>
