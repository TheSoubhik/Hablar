$(document).ready(function() {
 var interval= setInterval(function() {
 	$.ajax({
 		url: 'javascript/php/Chat.php',
 		success: function(data) {
 			$('#messages').html(data);
 		}
 	});
 },10000);
});