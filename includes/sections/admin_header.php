<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>مدیریت محتوا سایت</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- CSS -->
	<link rel="stylesheet" href="/hodhodMarket/css/bootstrap.css" >
	<link rel="stylesheet" type="text/css" href="/hodhodMarket/css/admin_style.css">

	<!-- jQuery -->
	<script src="/hodhodMarket/js/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<!-- JavaScript / bootstrap -->
	<script src="/hodhodMarket/js/bootstrap.min.js"></script>
	<script src="/hodhodMarket/js/admin_script.js"></script>

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
	   <li><a href="#"><span class="glyphicon glyphicon-user"></span> <?php echo htmlspecialchars($_SESSION['USERNAME']); ?> </a></li>
	   <li><a href="index.php?sign=out"><span class="glyphicon glyphicon-log-in"></span> خروج </a></li>
	 </ul>

   </div>
 </div>
</nav>
