<?php
require_once 'DB.php';
require_once 'formatDate.php';

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Chat system with php</title>
	<link rel="stylesheet" href="style.css">
	<script>
		function ajax() {
			
		var request = new XMLHttpRequest();
		
		request.onreadystatechange = function(){
			if(request.readyState == 4 && request.status == 200){
				
				document.getElementById('chat').innerHTML = request.responseText;
			}
		}
		request.open('GET','chat.php',true);
		request.send();
		}
		setInterval(function(){ajax()},1000);
	</script>
</head>
<body onload="ajax();">
	<div id="container">
		<div id="chat_box">
			<div id="chat">
				
			</div>
		</div>
		
		<form action="" method="post">
			<input type="text" name="name" placeholder="Your name">
			<textarea name="message" id="" cols="30" rows="10" placeholder="Enter your message here"></textarea>
			<input type="submit" value="Send it" name="submit">
		</form>
		
		<?php
		if(isset($_POST['submit'])){
			$name = $_POST['name'];
			$message = $_POST['message'];
			
			$query = "INSERT INTO chat(name, message) VALUES('{$name}', '{$message}')";
			
			$result = $conn->query($query);
			if($result){
				
			}
			
		}
		
		?>
	</div>
</body>
</html>