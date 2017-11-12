<?php require("../includes/init.php"); ?>
<?php
	session_start();
	if (!isset($_SESSION['USERNAME'])) {
		header('Location: login.php');
		exit;
	}
	$sign = isset($_GET['sign']) ? $_GET['sign'] : "";
	if ($sign === "out") {
		unset($_SESSION['USERNAME']);
		header('Location: login.php');
		exit;
	}
?>
<?php include(SECTION_PATH."/admin_header.php"); ?>

	<div class="container w-50">
		<blockquote class="blockquote">
			<p class="d-block text-center m-2 p-2">Welcome to <span class="font-italic">Admin Panel</span> <?php echo htmlspecialchars($_SESSION['USERNAME']); ?></p>
		</blockquote>
	</div>
	<article>
		<div class="container">
			<h3 class="navbar-brand">Please Enter Your Product:</h3>
			<ul class="navbar ml-4">
				<li class="navbar-item">
					<a class="navbar-link" href="<?php echo ADMIN_ROOT."/product"; ?>">Product</a>
				</li>
				<li class="navbar-item">
					<a class="navbar-link" href="<?php echo ADMIN_ROOT."/category"; ?>">Category</a>
				</li>
				<li class="navbar-item">
					<a class="navbar-link" href="<?php echo ADMIN_ROOT."/sliders"; ?>">Sliders</a>
				</li>
			</ul>
		</div>
	</article>
<?php include(SECTION_PATH."/admin_footer.php"); ?>
