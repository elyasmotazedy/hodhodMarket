<?php require_once("includes/init.php"); ?>
<?php include(SECTION_PATH."/header.php"); ?>



<section class="container">

    <div class="row no-gutters m-5" style="border:1px solid #808080;">

        <div class="col-md-4" style="border-left: 1px solid #808080;">

            <img class="" src="image/zhele.jpg" alt="zhele" height="100%" width="100%">

        </div>
        <div class="col-md-8">

            <div class="card">
                <h1 class="card-header h4 bg-warning text-white">نام محصول</h1>
                <div class="card-block">
                    <div class="d-flex flex-row row-hl justify-content-between">
                        <div class="p-3 item-hl">
                            <label for="example-number-input" class="">تعداد: </label>
                            <input class="w-25" type="number"  id="example-number-input" min="1" value="1"> <br><br>
                            <span>قیمت: </span>
                            <span>2000 تومان</span><br><br>
                            <span>تخفیف: </span>
                            <span>1000 تومان</span><br><br>
                            <span>قیمت نهایی: </span>
                            <span>2000 تومان</span><br><br>

                        </div>

                        <div class="p-4 item-hl">
                            <div class="card">
                                <div class="card-header">مشخصات اصلی</div>
                                <div class="card-block">
                                    <span>برند: </span>
                                    <span>شیبابا</span><br>
                                    <span>نوع: </span>
                                    <span>ژله</span><br>
                                    <span>کشور تولید کننده:</span>
                                    <span>ایران</span><br>
                                </div>
                            </div>
                            <div class="d-flex flex-row row-hl justify-content-between">
                                <div class="p-4 item-hl"><i class="fa fa-share-alt text-info" aria-hidden="true"></i></div>
                                <div class="p-4 item-hl"><i class="fa fa-heart text-danger" aria-hidden="true"></i></div>
                            </div>
                        </div>
                    </div>

                    <a href="#" class="fa fa-shopping-cart btn btn-warning" style="font-size: 18px"> افزودن به سبد</a>
                </div>
            </div>

        </div>

    </div>

</section>


<section class="container">
    <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" href="#detail" role="tab" data-toggle="tab">مشخصات</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#comment" role="tab" data-toggle="tab">نظرات</a>
        </li>
    </ul>

    <div class="tab-content">
        <div role="tabpanel" class="tab-pane fade in active m-5" id="detail">
            <div class="input-group p-2" dir="ltr">
                <span class="form-control w-25 text-right" type="text">ژله</span>
                <span class="input-group-addon pr-5 pl-5 bg-warning text-white">نوع</span>
            </div>
            <div class="input-group p-2" dir="ltr">
                <span class="form-control w-25 text-right" type="text">100 گرم</span>
                <span class="input-group-addon pr-5 pl-5 bg-warning text-white">وزن</span>
            </div>
            <div class="input-group p-2" dir="ltr">
                <span class="form-control w-25 text-right" type="text">10/2/96</span>
                <span class="input-group-addon pr-5 pl-5 bg-warning text-white">تولید</span>
            </div>
            <div class="input-group p-2" dir="ltr">
                <span class="form-control w-25 text-right" type="text">10/8/96</span>
                <span class="input-group-addon pr-5 pl-5 bg-warning text-white">انقضا</span>
            </div>
        </div>

        <div role="tabpanel" class="tab-pane fade" id="comment">
            <div class="card p-5">
                    <div style="box-shadow: 5px 5px 5px #e5e5e5">
                        <div class="card-header" >
                            <h5>نام کاربر</h5>
                            <small>تاریخ نظر</small>
                        </div>
                        <div class="card-block">
                            <p>اینجا متن پیام قرار می گیرد</p>
                        </div>
                    </div>
                 </div>
            <div class="card p-5">
                <div style="box-shadow: 5px 5px 5px #e5e5e5">
                    <div class="card-header" >
                        <h5>نام کاربر</h5>
                        <small>تاریخ نظر</small>
                    </div>
                    <div class="card-block">
                        <p>اینجا متن پیام قرار می گیرد</p>
                    </div>
                </div>
            </div>
            <a href="#" class="btn btn-warning btn-block" data-toggle="modal" data-target="#addPostModal"><i class="fa fa-plus"></i> ثبت نظر</a>
        </div>
    </div>
</section>

<section class="container mb-5 mt-5">
<div class="card">
    <div class="card-header bg-warning text-white font-weight-bold">
        <span>محصولات مشابه</span>
    </div>
    <div class="center slider w-100 p-0 card-block ">
        <div class="main-carousel text-center font-weight-bold" data-flickity='{ "cellAlign": "left", "contain": true }'>
            <div class="carousel-cell">
                <a href="#"><img src="image/biogelz.jpg" alt="aks" width="170" height="170"></a>
                <p>چیپس</p>
                <p>1000 تومان</p>
                <p>500 تومان</p>
            </div>
            <div class="carousel-cell">
                <a href="#"><img src="image/labani.jpg" alt=""  width="170" height="170"></a>
                <p>پودر ژله پرتقالی</p>
                <p>1000 تومان</p>
                <p>&nbsp;</p>
            </div>
            <div class="carousel-cell">
                <a href="#"><img src="image/zhele.jpg" alt=""  width="170" height="170"></a>
                <p>پودر ژله پرتقالی</p>
                <p>1000 تومان</p>
                <p>&nbsp;</p>
            </div>
            <div class="carousel-cell">
                <a href="#"><img src="image/soop.png" alt=""  width="170" height="170"></a>
                <p>پودر ژله پرتقالی</p>
                <p>1000 تومان</p>
                <p>&nbsp;</p>
            </div>
            <div class="carousel-cell">
                <a href="#"><img src="image/nokhod.jpg" alt=""  width="170" height="170"></a>
                <p>پودر ژله پرتقالی</p>
                <p>1000 تومان</p>
                <p>&nbsp;</p>
            </div>
            <div class="carousel-cell">
                <a href="#"><img src="image/soop.png" alt=""  width="170" height="170"></a>
                <p>پودر ژله پرتقالی</p>
                <p>1000 تومان</p>
                <p>&nbsp;</p>
            </div>
            <div class="carousel-cell">
                <a href="#"><img src="image/labani.jpg" alt=""  width="170" height="170"></a>
                <p>پودر ژله پرتقالی</p>
                <p>1000 تومان</p>
                <p>&nbsp;</p>
            </div>
            <div class="carousel-cell">
                <a href="#"><img src="image/biogelz.jpg" alt="aks" width="170" height="170"></a>
                <p>پودر ژله پرتقالی</p>
                <p>1000 تومان</p>
                <p>&nbsp;</p>
            </div>
            <div class="carousel-cell">
                <a href="#"><img src="image/soop.png" alt=""  width="170" height="170"></a>
                <p>پودر ژله پرتقالی</p>
                <p>1000 تومان</p>
                <p>&nbsp;</p>
            </div>
        </div>
    </div>
</div>
</section>
<br>
<br>
<br>
<br>




<!-- ADD COMMENT MODAL -->
<div class="modal fade" id="addPostModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-warning text-white">
                <h5 class="modal-title" id="addPostModalLabel">ارسال نظر</h5>
                <button class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="body">متن پیام</label>
                        <textarea name="editor1" class="form-control"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-dismiss="modal">بستن</button>
                <button class="btn btn-warning" data-dismiss="modal">ثبت</button>
            </div>
        </div>
    </div>
</div>
<?php include(SECTION_PATH."/footer.php"); ?>
