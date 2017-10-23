<?php 
	session_start();
	if(!isset($_SESION['username'])) {
		header("Location: login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Control Panel</title>
</head>
<body>

</body>
</html>