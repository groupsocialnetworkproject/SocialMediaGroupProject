<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<p>hey 
		<?php 
			session_start();
			echo $_SESSION['user_online']; 
			echo "<br/> <a href='user_access_code.php?logout'>Logout</a>" 
		?>		
	</p>
</body>
</html>