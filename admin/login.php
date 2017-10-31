<?php require_once("../includes/init.php"); ?>
<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>صفحه ورود شما</title>
	<link rel="stylesheet" href="/hodhodMarket/css/bootstrap.css"; >
	<link rel="stylesheet" type="text/css" href="/hodhodMarket/css/admin_style.css">

	<!-- jQuery -->
	<script src="/hodhodMarket/js/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<!-- JavaScript / bootstrap -->
	<script src="/hodhodMarket/js/bootstrap.min.js"></script>
	<script src="/hodhodMarket/js/admin_script.js"></script>

</head>
<body>
	<div class="login">
		<h1>Login</h1>
	    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
	    	<input type="text" name="username" placeholder="نام کاربری یا اینیل" required="required" value=""/>
	        <input type="password" name="password" placeholder="پسورد" value="" required="required" />
	        <button type="submit" name="admin_submit" class="btn btn-primary btn-block btn-large">Let me in.</button>
	    </form>
		<?php
		$admin = $DB->query("SELECT * FROM hodhod_admin");
		if(isset($_POST['admin_submit']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
			$user = test_input($_POST['username']);
			$pass = test_input($_POST['password']);
			foreach ($admin as $row) {
				if ( ($user === $row['admin_username'] || $user === $row['admin_email'] ) && ($pass === $row['admin_password'])) {
					$_SESSION["USERNAME"] = $user;
					header("Location:index.php");
					exit;
				}
			}
		}
		$DB->closeCursor($admin);
		?>
	</div>
</body>
</html>
