<?php
	session_start();
	if (!isset($_SESSION['USERNAME'])) {
		header('Location: login.php');
		exit;
	}
	$sign = isset($_GET['sign']) ? $_GET['sign'] : "" ;
	if ($sign === "out") {
		unset($_SESSION['USERNAME']);
		header('Location: login.php');
		exit;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Control Panel</title>

	<!-- CSS -->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="../css/admin_style.css">

</head>
<body style="overflow-y:scroll !important">

	<nav class="navbar navbar-inverse" style="    border-radius: 0;background-color: #a86845;">
 <div class="container-fluid">
   <div class="navbar-header">
	 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	   <span class="icon-bar"></span>
	   <span class="icon-bar"></span>
	   <span class="icon-bar"></span>
	 </button>
	 <a class="navbar-brand" href="#" style="color: #fff">HODHOD</a>
   </div>
   <div class="collapse navbar-collapse " id="myNavbar">
	 <ul class="nav navbar-nav ">
	   <li><a href="#">دسته بندی ها</a></li>
	   <li><a href="#">محصولات : 214</a></li>
	   <li><a href="#">نظرات: 23</a></li>
	   <li><a href="#">امتیاز ها: 13</a></li>
       <li  class="active"><a href="#">خانه</a></li>

     </ul>

	 <ul class="nav navbar-nav navbar-right">
	   <li><a href="#"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['USERNAME']; ?> </a></li>
	   <li><a href="index.php?sign=out"><span class="glyphicon glyphicon-log-in"></span> خروج </a></li>
	 </ul>

   </div>
 </div>
</nav>
