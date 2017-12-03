<?php require_once("includes/init.php"); ?>
<?php include(SECTION_PATH."/header.php"); ?>




<section class="container">
    <div class="row text-center mt-5 p-4" style="border: 1px solid #d8d8d8;background-color: #ffffff;">
        <div class="col">
            <i class="fa fa-user-plus fa-5x"></i>
            <h2 class="mr-3">ثبت نام</h2>
        </div>
    </div>
    <div class="row border-top-0" style="background-color: #ffffff;border: 1px solid #d8d8d8;">
        <div class="col-md-6">
            <form action="#" method="post">
                <br>

                <label class="btn-block text-muted p-2" for="emailorphone">شماره تلفن یا ایمیل</label>
                <input class="btn-block pl-1" type="text" id="emailorphone" name="emailorphone" placeholder="phone or email" dir="ltr">

                <label class="btn-block text-muted p-2" for="password1">رمز عبور</label>
                <input class="btn-block pl-1" type="text" id="password1" name="password1" placeholder="password" dir="ltr">

                <label class="btn-block text-muted p-2" for="password2">تایید رمز عبور</label>
                <input class="btn-block pl-1" type="text" id="password2" name="password2" placeholder="confirm password" dir="ltr">
                <br>
                <input class="p-2" type="checkbox" id="rules" name="rules">
                <label class="pl-1" for="rules"> و  هدهد مارک را خوانده ام و با آن موافق هستم.<a href="#">مقررات</a><a href="#">قوانین</a></label>

                <input class="btn btn-warning btn-block mt-4" type="submit" value="ثبت نام در هدهد مارکت">
            </form>
            <p class="font-weight-bold m-3">اگر قبلا در هدهد مارکت ثبت نام کرده اید <a class="text-info" href="#" data-toggle="modal" data-target="#sign-in">وارد</a> شوید</p>
        </div>
        <div class="col-md-6">
            <p>dlflsdmflksmv</p>
        </div>
    </div>
</section>




<?php include(SECTION_PATH."/footer.php"); ?>
