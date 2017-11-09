<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <title>فروشگاه هدهد</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Online Hyper Market">
    <meta name="keywords" content="hyper market">
    <meta name="author" content="Elyas Poor Motazedy & shahriyar tarnasi">



    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="/hodhodMarket/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="slick/slick.css">
    <link rel="stylesheet" href="slick/slick-theme.css">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="/hodhodMarket/css/style.css">

</head>


<body>

<!-- HEADER SECTION -->
<header>
    <div class="container text-center">
        <div class="row">
            <div class="col-md-2 col-sm-2 p-3 text-center">
                <img src="image/logo.png" alt="logo" width="100" height="100">
            </div>
            <div class="col-md-10">
                <div class="row m-3">
                    <div class="col-md-6">
                        <a href="#" class="btn btn-warning btn-sm ml-3" data-toggle="modal" data-target="#addUserModal">ورود</a>
                        <a href="#" class="btn btn-outline-warning btn-sm">ثبت نام</a>
                    </div>
                    <div class="col-md-6">
                        <a href="#" class="btn btn-warning rounded-0">سبد خردید 0
                            <a href="#" class="btn rounded-0 text-white" style="background-color: #ea8c00">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            </a>
                        </a>
                    </div>
                </div>
                <div class="row">
                     <div class="col-md-12">
                        <div class="input-group">
                            <input type="text" class="form-control rounded-0" placeholder="جستوجو ...">
                            <span class="input-group-btn">
                                <button class="btn btn-warning rounded-0" type="button">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>

<!-- NAVBAR SECTION -->

<nav class="navbar navbar-toggleable navbar-inverse bg-warning ">
    <div class="container">
        <button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a  href="#" class="navbar-brand">هد هد مارکت</a>
        <div class="clear-both collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" data-toggle="dropdown"> تازه و لبنی </a>
                    <div class="dropdown-menu text-center">
                        <a href="#" class="dropdown-item">لبنیات</a>
                        <a href="#" class="dropdown-item">گوشت و مرغ</a>
                        <a href="#" class="dropdown-item">میوه سبزی</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" data-toggle="dropdown">خشک اساسی و کنسرو </a>
                    <div class="dropdown-menu text-center">
                        <a href="#" class="dropdown-item">ادویه و چاشنی</a>
                        <a href="#" class="dropdown-item">کنسرو و کمپوت</a>
                        <a href="#" class="dropdown-item">رب و سس</a>
                        <a href="#" class="dropdown-item">برنج و ماکارانی</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" data-toggle="dropdown"> شوینده, آرایشی و بهداشتی </a>
                    <div class="dropdown-menu text-center">
                        <a href="#" class="dropdown-item">سلولوزی</a>
                        <a href="#" class="dropdown-item">آرایشی و بهداشتی</a>
                        <a href="#" class="dropdown-item">پودر و مایع</a>
                        <a href="#" class="dropdown-item">مراقبت از پوست و مو و دندان</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" data-toggle="dropdown">شیرینی جات و تنقلات </a>
                    <div class="dropdown-menu text-center">
                        <a href="#" class="dropdown-item">چیپس و پفک
                        </a>
                        <a href="#" class="dropdown-item">اسنک</a>
                        <a href="#" class="dropdown-item">اقلام صبحانه</a>
                        <a href="#" class="dropdown-item">کیک</a>
                    </div>
                </li>


            </ul>
        </div>

    </div>
</nav>



<!-- LOGIN MODAL -->

<div class="modal fade" id="addUserModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-warning text-white">
                <h5 class="modal-title" id="addUserModalLabel">ورود کاربران</h5>
                <button class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="email" class="form-control-label">ایمیل:</label>
                        <input type="email" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="password" class="form-control-label">رمز ورود:</label>
                        <input type="password" class="form-control" id="password">
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-dismiss="modal">بستن</button>
                <button class="btn btn-warning" data-dismiss="modal">ورود</button>
            </div>
        </div>
    </div>
</div>

