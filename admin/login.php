<?php require_once("../includes/init.php"); ?>
<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="../css/admin_style.css" />
</head>
<body>
	<div class="login">
		<h1>Login</h1>
	    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
	    	<input type="text" name="username" placeholder="Username" required="required" value=""/>
	        <input type="password" name="password" placeholder="Password" value="" required="required" />
	        <button type="submit" name="admin_submit" class="btn btn-primary btn-block btn-large">Let me in.</button>
	    </form>
		<?php
		if(isset($_POST['admin_submit']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
			$admin = $DB->query("SELECT * FROM hodhod_admin");
			$user = test_input($_POST['username']);
			$pass = test_input($_POST['password']);
			foreach ($admin as $row) {
				if ( ($user === $row['admin_username']) && ($pass === $row['admin_password'])) {
					$_SESSION["USERNAME"] = $user;
					header("Location:index.php");
					exit;
				}
			}
		}
		?>
	</div>
</body>
</html>
