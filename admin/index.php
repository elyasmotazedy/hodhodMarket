<?php 
//	session_start();
//	if(!isset($_SESION['username'])) {
//		header("Location: login.php");
//	}
//?>
<!DOCTYPE html>
<html dir="rtl">
<head>
	<meta charset="utf-8">
	<title>Control Panel</title>

    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="../bootstrap/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->

    <link rel="stylesheet" type="text/css" href="css/admin_style.css">

</head>
<body>

    <div class="container text-right" style="background-color: white">
        <header class="row" style="background-color: white">

            <div class="col-md-2">
                <img src="../image/logo1.png" alt="logo" width="90" height="70">
            </div>

            <div class="col-md-7 welcomeSec">
                <strong>شهریار ترناسی</strong>
                <span>خوش آمدید</span>
            </div>

            <div class="col-md-3 text-left buttonSec" >
                <a href="#" class="btn font-weight-bold">سایت اصلی</a>
                <a href="#" class="btn btn-danger font-weight-bold">خروج</a>
            </div>


        </header>


        <div class="row">
            <span class="col-md-12">دسته بندی ها</span>
        </div>
        <div class="row text-center">
            <div class="col-md-6">
                <span>دسته بندی کلی</span>
                <select>
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    <option value="vw">VW</option>
                    <option value="audi" selected>Audi</option>
                </select>
            </div>
            <div class="col-md-6">
                <span>محصولات</span>
                <select>
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    <option value="vw">VW</option>
                    <option value="audi" selected>Audi</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="text-center"><span >لیست پست ها</span></div>
                <div class="card">
                    <img src="../image/logo1.png" alt="John" style="width:100%;height: 200px">
                    <h1>HOD HOd</h1>
                    <span>دسته بندی:</span>
                    <span>لبنیات</span>
                    <span>محصول:</span>
                    <span>پنیر</span>
                    <p class="title">قیمت</p>
                    <span>20000</span
                    <p class="title">قیمت با تخفیف</p>
                    <span>10000</span>
                    <p class="title">توضیحات اضافی</p>
                    <ul>
                        <li>برند : لئونارد</li>
                        <li>وزن (گرم) : 420</li>
                        <li>کشور تولید کننده : ایران</li>
                    </ul>
                    <div class="text-center">حذف</div>
                </div>
                <div class="card">
                    <img src="../image/logo1.png" alt="John" style="width:100%;height: 200px">
                    <h1>HOD HOd</h1>
                    <span>دسته بندی:</span>
                    <span>لبنیات</span>
                    <span>محصول:</span>
                    <span>پنیر</span>
                    <p class="title">قیمت</p>
                    <span>20000</span
                    <p class="title">قیمت با تخفیف</p>
                    <span>10000</span>
                    <p class="title">توضیحات اضافی</p>
                    <ul>
                        <li>برند : لئونارد</li>
                        <li>وزن (گرم) : 420</li>
                        <li>کشور تولید کننده : ایران</li>
                    </ul>
                    <div class="text-center">حذف</div>

                </div>

            </div>

        </div>


    </div>

</body>
</html>