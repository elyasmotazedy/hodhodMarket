<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <title><?php echo $user ?? "فروشگاه هدهد"; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Online Hyper Market">
    <meta name="keywords" content="hyper market">
    <meta name="author" content="Elyas Poor Motazedy & shahriyar tarnasi">
    <link rel="icon" href="<?php echo htmlspecialchars(IMAGE_ROOT."/logo.png"); ?>">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

<!--    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.css">-->
    <link rel="stylesheet" href="<?php echo htmlspecialchars(CSS_ROOT."/flickity.css"); ?>" media="screen">
    <link href="http://code.gijgo.com/1.6.1/css/gijgo.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" type="text/css" href="<?php echo htmlspecialchars(CSS_ROOT."/style.css"); ?>">
    <script src="<?php echo htmlspecialchars(JS_ROOT."/hodhod_script.js"); ?>"></script>

</head>


<body>

<!-- HEADER SECTION -->
<header>
    <div class="container text-center">
        <div class="row">
            <div class="col-md-2 col-sm-2 p-3 text-center">
                <img src="<?php echo htmlspecialchars(IMAGE_ROOT."/logo.png"); ?>" alt="logo" width="100" height="100">
            </div>
            <div class="col-md-10">
                <div class="row m-3">
                    <div class="col-md-6 pt-2">
                        <br>
                        <a href="javascript:void(0)" class="btn btn-warning btn-sm ml-3 pb-2 w-25" data-toggle="modal" data-target="#sign-in">ورود</a>
                        <a href="<?php echo htmlspecialchars(WWW_ROOT."/sign-up.php"); ?>" class="btn btn-outline-warning btn-sm pb-2 w-25">ثبت نام</a>
                    </div>
                    <div class="col-md-6 pt-4">
                        <div data-toggle="tooltip" data-placement="top" title="تماس با ما" class="bg-warning text-white d-inline-block" style="width: 50px;height: 50px;border-radius: 50%;line-height: 60px;">
                            <a class="text-white" href="#"><i class="fa fa-phone fa-2x"></i></a>
                        </div>
                        <div data-toggle="tooltip" data-placement="top" title="خانه" class="bg-warning text-white d-inline-block" style="width: 50px;height: 50px;border-radius: 50%;line-height: 60px;">
                            <a class="text-white" href="<?php echo htmlspecialchars(WWW_ROOT); ?>"><i class="fa fa-home fa-2x"></i></a>
                        </div>
                    </div>
                </div>
        </div>
    </div>

</header>

<!--BRAND NAME-->
<div class="container-fluid">
    <div class="row">
        <div class="col text-center p-3" style="background-color:rgba(255,189,96,0.17)">
            <img class="ml-3" src="<?php echo htmlspecialchars(IMAGE_ROOT."/autumn.png"); ?>" alt="hodhod market " width="70" height="70">
            <img class="hodhodName" src="<?php echo htmlspecialchars(IMAGE_ROOT."/hodhodname.png"); ?>" alt="hodhod market "  width="50%" height="80">
            <img class="mr-3" src=<?php echo htmlspecialchars(IMAGE_ROOT."/autumn.png"); ?>" alt="hodhod market " width="70" height="70">

        </div>
    </div>
</div>

<!-- NAVBAR SECTION -->

<nav class="navbar navbar-toggleable navbar-inverse bg-warning sticky-top">
    <div class="container">
        <button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a  href="<?php echo htmlspecialchars(WWW_ROOT); ?>" class="navbar-brand">هد هد مارکت</a>
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
                    <div class="dropdown-menu text-center bg-warning border-right-0 border-left-0">
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
<?php
    $login_user = $DB->query("SELECT * FROM hodhod_users");
    if( isset($_POST["btn"])  && $_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $user = test_input($_POST['uname']);
        $pass = test_input($_POST['upass']);
                
        foreach ($login_user as $row) {
            if ( ($user === $row['user_name'] || $user === $row['user_email'] ) && ($pass.toString() === $row['user_password'])) {
                $_SESSION["USERNAME"] = $user;
            }
        }
    }
?>
<div class="modal fade" id="sign-in">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-warning text-white">
                <h5 class="modal-title" id="addUserModalLabel">ورود کاربران</h5>
                <button class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            
            <form action="http://google.com" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="email" class="form-control-label">ایمیل:</label>
                        <input type="email" class="form-control" id="email" name="uname">
                    </div>
                    <div class="form-group">
                        <label for="password" class="form-control-label">رمز ورود:</label>
                        <input type="password" class="form-control" id="password" name="upass">
                    </div>
                </div>
                <div class="modal-footer">
                    <button style="width:15%;cursor:pointer;" class="btn btn-secondary pb-2" data-dismiss="modal">بستن</button>
                    <input style="width:15%;cursor:pointer;" type="submit" class="btn btn-warning mr-2 pb-2" data-dismiss="modal" name="btn" value="ورود">
                </div>
            </form>
        </div>
    </div>
</div>

