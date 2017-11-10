<?php require_once("includes/init.php"); ?>
<?php include(SECTION_PATH."/header.php"); ?>
<div class="container my-5">
    <!-- SLIDER WITH INDICATORS -->
    <div id="slider3" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li class="active" data-target="#slider3" data-slide-to="0"></li>
            <li class="active" data-target="#slider3" data-slide-to="1"></li>
            <li class="active" data-target="#slider3" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active" style="height:390px">
                <img src="image/image1.jpeg" alt="First Slide" class="d-block img-fluid" width="100%">
            </div>
            <div class="carousel-item" style="height:390px;">
                <img src="image/image2.jpg" alt="Second Slide" class="d-block img-fluid" width="100%">
            </div>
            <div class="carousel-item" style="height:390px;">
                <img src="image/image3.jpg" alt="Third Slide" class="d-block img-fluid" width="100%">
            </div>
        </div>
        <a href="#slider3" class="carousel-control-prev" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a href="#slider3" class="carousel-control-next" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>

</div>

<section class="container mb-5">
    <div class="card">
        <div class="card-header bg-warning text-white font-weight-bold">
            <span>آخرین محصولات</span>
        </div>
        <div class="center slider w-100 p-0 card-block m-0 text-center">
            <div class="h-25">
                <img src="image/delester.jpg" width="100" height="200">
                <div class="card-block">
                    <h6 class="card-title">دلستر</h6>
                    <p class="card-text">1000 تومان</p>
                    <a href="#" class="btn btn-danger">افزودن به سبد خرید</a>
                </div>
            </div>
            <div class="h-25">
                <img src="image/nokhod.jpg" width="100" height="200">
                <div class="card-block">
                    <h6 class="card-title">Card Title</h6>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, perspiciatis.</p>
                    <a href="#" class="btn btn-danger">Read More</a>
                </div>
            </div>
            <div class="h-25">
                <img src="image/pasta.jpg" width="100" height="200">
                <div class="card-block">
                    <h6 class="card-title">Card Title</h6>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, perspiciatis.</p>
                    <a href="#" class="btn btn-danger">Read More</a>
                </div>
            </div>
            <div class="h-25">
                <img src="image/rob.jpeg" width="100" height="200">
                <div class="card-block">
                    <h6 class="card-title">Card Title</h6>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, perspiciatis.</p>
                    <a href="#" class="btn btn-danger">Read More</a>
                </div>
            </div>
            <div class="h-25">
                <img src="image/zhele.jpg" width="100" height="200">
                <div class="card-block">
                    <h6 class="card-title">Card Title</h6>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, perspiciatis.</p>
                    <a href="#" class="btn btn-danger">Read More</a>
                </div>
            </div>
            <div class="h-25">
                <img src="image/soop.png" width="100" height="200">
                <div class="card-block">
                    <h6 class="card-title">Card Title</h6>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, perspiciatis.</p>
                    <a href="#" class="btn btn-danger">Read More</a>
                </div>
            </div>
            <div class="h-25">
                <img src="image/pofak.jpg" width="100" height="200">
                <div class="card-block">
                    <h6 class="card-title">پفک چی توز</h6>
                    <p class="card-text">1000 تومان</p>
                    <a href="#" class="btn btn-danger">افزودن به سبد خرید</a>
                </div>
            </div>
            <div class="h-25">
                <img src="image/biogelz.jpg" width="100" height="200">
                <div class="card-block">
                    <h6 class="card-title">Card Title</h6>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, perspiciatis.</p>
                    <a href="#" class="btn btn-danger">Read More</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container mb-5">
    <div class="card">
        <div class="card-header bg-warning text-white font-weight-bold">
            <span>محصولات پر فروش</span>
        </div>
        <div class="center slider w-100 p-0 card-block">
            <div>
                <img src="image/delester.jpg" width="300" height="200">
            </div>
            <div>
                <img src="image/nokhod.jpg" width="300" height="200">
            </div>
            <div>
                <img src="image/pasta.jpg" width="300" height="200">
            </div>
            <div>
                <img src="image/rob.jpeg" width="300" height="200">
            </div>
            <div>
                <img src="image/zhele.jpg" width="300" height="200">
            </div>
            <div>
                <img src="image/soop.png" width="300" height="200">
            </div>
            <div>
                <img src="image/pofak.jpg" width="300" height="200">
            </div>
            <div>
                <img src="image/biogelz.jpg" width="300" height="200">
            </div>
        </div>
    </div>
</section>


<section class="container mb-5">
    <div class="row">
        <div class="col-md-6 h-25">
            <img class="" src="image/labani.jpg" alt="aks" height="100%" width="100%">
        </div>
        <div class="col-md-6">
            <img class="" src="image/behdashti.jpg" alt="aks" height="100%" width="100%">
        </div>
    </div>
</section>
<?php include(SECTION_PATH."/footer.php"); ?>
