<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="css/admin_style.css" />
</head>
<body>
	<div class="login">
		<h1>Login</h1>
	    <form method="post">
	    	<input type="text" name="u" placeholder="Username" required="required" value=""/>
	        <input type="password" name="p" placeholder="Password" value="" required="required" />
	        <button type="submit" class="btn btn-primary btn-block btn-large">Let me in.</button>
	    </form>
	</div>
</body>
</html>