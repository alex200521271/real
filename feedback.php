<!DOCTYPE html>
<html>
<head>
	<?php 
	$title = "Feedback";
	require_once "blocks/head.php";
	 ?>

	 <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

	 <script type="text/javascript">
	 	$(document).ready (function () {
	 		$("#done").click (function () {
	 			$("#messageShow").hide ();
	 			var name = $("#name").val ();
	 			var email = $("#email").val ();
	 			var subject = $("#subject").val ();
	 			var message = $("#message").val ();
	 			var fail = "";
	 			if (name.length < 3) fail = "The name must be at least 3 characters!";
	 			else if (email.split ('@').length - 1 == 0 || email.split ('.').length - 1 == 0)
	 				fail = "You have entered an incorrect email!";
	 			else if (subject.length < 5)
	 				fail = "The subject of the message is at least 5 characters!";
	 			else if (message.length < 20)
	 				fail = "The message text must contain at least 20 characters!";
	 			if (fail != "") {
	 				$("#messageShow").html (fail + "<div class = 'clear'><br></div>");
	 				$("#messageShow").show ();
	 				return false;
	 			}
	 			$.ajax ({
	 				url: '/ajax/feedback.php',
	 				type: 'POST',
	 				cache: false,
	 				data: {'name':name, 'email':email, 'subject':subject, 'message':message},
	 				dataType: 'html',
	 				success: function (data) {
	 						$("#messageShow").html (data + "<div class = 'clear'><br></div>");
	 						$("#messageShow").show ();
	 				}
	 			});
	 		});
	 	});
	 </script>

</head>
<body>
	<?php require_once "blocks/header.php" ?>
	<div id = "wrapper">
		<div id = "leftCol">
			<input type="text" name="name" placeholder="Name" id="name"><br>
			<input type="text" name="email" placeholder="Email" id="email"><br>
			<input type="text" name="subject" placeholder="Subject of the message" id="subject"><br>
			<textarea name="message" id="message" placeholder="Enter the text"></textarea><br>
			<div id="messageShow"></div>
			<input type="button" name="done" id="done" value="Send">
		</div>
		<?php require_once "blocks/rightCol.php" ?>
	</div>
	<?php require_once "blocks/footer.php" ?>
</body>	
</html>