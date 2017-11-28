<?php require_once("includes/init.php"); ?>
<?php include(SECTION_PATH."/header.php"); ?>


<section class="container">
    <div class="card m-5">
        <div class="card-header bg-warning text-white">اطلاعات کاربر</div>
        <div class="card-block">
            <table class="table table-bordered text-center">
                <tbody>
                <tr>
                    <td class="h6">نام و نام خانوادگی</td>
                    <td>الیاس پورمعتضدی</td>
                    <td  class="h6">آدرس ایمیل</td>
                    <td>lost_ring123@yahoo.com</td>
                </tr>
                <tr>
                    <td class="h6">شماره تلفن همراه</td>
                    <td>09302068620</td>
                    <td  class="h6">تاریخ تولد</td>
                    <td>4/2/1374</td>
                </tr>
                <tr>
                    <td class="h6">شماره تلفن ثابت</td>
                    <td>36256780</td>
                    <td  class="h6">جنسیت</td>
                    <td>مرد</td>
                </tr>
                <tr>
                    <td class="h6">آدرس محل سکونت</td>
                    <td colspan="3">ورامین سمت چپ بعدش سمت راست</td>

                </tr>
                </tbody>
            </table>
            <a href="#" class="btn btn-warning float-left">ویرایش اطلاعات</a>
        </div>
    </div>
</section>
<section class="container">

    <!-- TAB LIST -->

    <ul class="nav nav-tabs bg-warning mr-5 ml-5 p-0" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" href="#my-message" role="tab" data-toggle="tab">پیغام های من<span class="badge badge-default badge-pill mr-2">1</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#wish-list" role="tab" data-toggle="tab">لیست مورد علاقه</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#my-order" role="tab" data-toggle="tab">سفارش های من</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#my-comment" role="tab" data-toggle="tab">نظرات من</a>
        </li>
    </ul>

    <!-- MESSAGE -->

    <div class="tab-content">
        <div role="tabpanel" class="tab-pane fade in active m-5" id="my-message">
            <div class="card card-outline-warning">
                <div class="card-block pt-1">
                    <span class="text-danger font-weight-bold">&times;</span>
                    <h4 class="card-title text-warning">پیام مدیر</h4>
                    <p class="card-text">ورود شما رو تبریک میگوییم</p>
                </div>
            </div>
        </div>

        <!-- WHISH LIST -->

        <div role="tabpanel" class="tab-pane fade mx-5 text-center" id="wish-list">
            <div class="card d-inline-block mt-2" style="width:12rem;">
                <img class="card-img-top" src="image/zhele.jpg" alt="zhele" width="100%">
                <div class="card-block p-0 m-0">
                    <h4 class="card-title">ژله</h4>
                    <p class="card-text">1000 تومان</p>
                    <p class="card-text">&nbsp;</p>
                    <a href="#" class="btn btn-danger btn-block">حذف</a>
                    <a href="#" class="btn btn-warning btn-block">اضافه به سبد</a>
                </div>
            </div>
            <div class="card d-inline-block mt-2" style="width:12rem">
                <img class="card-img-top" src="image/biogelz.jpg" alt="biogezle" width="100%">
                <div class="card-block p-0 m-0">
                    <h4 class="card-title">چیپس</h4>
                    <p class="card-text">5000 تومان</p>
                    <p class="card-text">2000 تومان</p>
                    <a href="#" class="btn btn-danger btn-block">حذف</a>
                    <a href="#" class="btn btn-warning btn-block">اضافه به سبد</a>
                </div>
            </div>
            <div class="card d-inline-block mt-2" style="width:12rem;">
                <img class="card-img-top" src="image/zhele.jpg" alt="zhele" width="100%">
                <div class="card-block p-0 m-0">
                    <h4 class="card-title">ژله</h4>
                    <p class="card-text">1000 تومان</p>
                    <p class="card-text">&nbsp;</p>
                    <a href="#" class="btn btn-danger btn-block">حذف</a>
                    <a href="#" class="btn btn-warning btn-block">اضافه به سبد</a>
                </div>
            </div>
            <div class="card d-inline-block mt-2" style="width:12rem">
                <img class="card-img-top" src="image/biogelz.jpg" alt="biogezle" width="100%">
                <div class="card-block p-0 m-0">
                    <h4 class="card-title">چیپس</h4>
                    <p class="card-text">5000 تومان</p>
                    <p class="card-text">2000 تومان</p>
                    <a href="#" class="btn btn-danger btn-block">حذف</a>
                    <a href="#" class="btn btn-warning btn-block">اضافه به سبد</a>
                </div>
            </div>
            <div class="card d-inline-block mt-2" style="width:12rem;">
                <img class="card-img-top" src="image/zhele.jpg" alt="zhele" width="100%">
                <div class="card-block p-0 m-0">
                    <h4 class="card-title">ژله</h4>
                    <p class="card-text">1000 تومان</p>
                    <p class="card-text">&nbsp;</p>
                    <a href="#" class="btn btn-danger btn-block">حذف</a>
                    <a href="#" class="btn btn-warning btn-block">اضافه به سبد</a>
                </div>
            </div>
            <div class="card d-inline-block mt-2" style="width:12rem">
                <img class="card-img-top" src="image/biogelz.jpg" alt="biogezle" width="100%">
                <div class="card-block p-0 m-0">
                    <h4 class="card-title">چیپس</h4>
                    <p class="card-text">5000 تومان</p>
                    <p class="card-text">2000 تومان</p>
                    <a href="#" class="btn btn-danger btn-block">حذف</a>
                    <a href="#" class="btn btn-warning btn-block">اضافه به سبد</a>
                </div>
            </div>

        </div>

        <!-- ORDER -->

        <div role="tabpanel" class="tab-pane fade mx-5" id="my-order">
            <div class="card">
                <div class="card-header">لیست 1</div>
                <div class="card-block row">
                    <div class="col-md-10 col-sm-12">
                        <span class="card-title">تعداد کالاها:</span>
                        <span class="card-title">10</span><br>
                        <span class="card-title"> تعداد کل اجناس:</span>
                        <span class="card-title">30</span><br>
                        <span class="card-text"> تاریخ سفارش:</span>
                        <span class="card-text">10/9/96</span><br>
                        <span class="card-text">قیمت: </span>
                        <span class="card-text">1000000 ریال</span>
                    </div>
                    <div class="col-md-2 col-sm-12 text-center" style="line-height:120px">
                        <a data-toggle="modal" data-target="#order-table" class="btn btn-warning text-white">مشاهده کامل</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- COMMENTS -->

        <div role="tabpanel" class="tab-pane fade" id="my-comment">
            <div class="row mx-5">
                <div class="card p-3 col-md-9">
                    <div style="box-shadow: 5px 5px 5px #e5e5e5">
                        <div class="card-header" >
                            <h5>نام کاربر</h5>
                            <small>تاریخ نظر</small>
                        </div>
                        <div class="card-block">
                            <p>اینجا متن پیام قرار می گیرد</p>
                        </div>
                    </div>
                    <div class="mt-3">
                        <a href="#" class="btn btn-danger text-white float-left">حذف</a>
                        <a href="#" class="btn btn-warning float-left">ویرایش</a>
                    </div>
                </div>
                <div class="card-block col-md-3 bg-white text-center" style="background-color: #fff;border: 1px solid #e9e9e9;">
                    <img class="img-fluid" src="image/zhele.jpg" alt="zhele" width="200" height="200">
                </div>
            </div>
            <div class="row mx-5">
                <div class="card p-3 col-md-9">
                    <div style="box-shadow: 5px 5px 5px #e5e5e5">
                        <div class="card-header" >
                            <h5>نام کاربر</h5>
                            <small>تاریخ نظر</small>
                        </div>
                        <div class="card-block">
                            <p>اینجا متن پیام قرار می گیرد</p>
                        </div>
                    </div>
                    <div class="mt-3">
                        <a href="#" class="btn btn-danger text-white float-left">حذف</a>
                        <a href="#" class="btn btn-warning float-left">ویرایش</a>
                    </div>
                </div>
                <div class="card-block col-md-3 bg-white text-center" style="background-color: #fff;border: 1px solid #e9e9e9;">
                    <img class="img-fluid" src="image/pofak.jpg" alt="zhele" width="200" height="200">
                </div>
            </div>
        </div>
    </div>
</section>


<!--ORDER TABLE-->
<div class="modal fade" id="order-table">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-warning text-white">
                <h5 class="modal-title" id="addUserModalLabel">ورود کاربران</h5>
                <button class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-sm table-hover table-striped">
                    <thead>
                    <tr>
                        <th class="text-right">#</th>
                        <th class="text-right">نام کالا</th>
                        <th class="text-right">تعداد</th>
                        <th class="text-right">قیمت واحد(ریال)</th>
                        <th class="text-right">قیمت کل (ریال)</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>ژله</td>
                        <td>3</td>
                        <td>2000</td>
                        <td>6000</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>پفک</td>
                        <td>5</td>
                        <td>500</td>
                        <td>2500</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>خامه</td>
                        <td>2</td>
                        <td>1000</td>
                        <td>2000</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>روغن لادن</td>
                        <td>1</td>
                        <td>6000</td>
                        <td>6000</td>
                    </tr>
                    </tbody>
                </table>

            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-dismiss="modal">بستن</button>
                <button class="btn btn-warning" data-dismiss="modal">سفارش دوباره لیست</button>
            </div>
            <i class="fa fa-info-circle text-info d-inline-block m-3 px-3" aria-hidden="true" style="font-size: 18px;"> اگر روی "سفارش دوباره لیست" کلیک کنید می توانید به لیست خود جنس اضافه کنید یا جنسی را حذف کنید همچنین شما می توایند تعداد را کم و زیاد کنید.</i>

        </div>
    </div>
</div>

<?php include(SECTION_PATH."/footer.php"); ?>
