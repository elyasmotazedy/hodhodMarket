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
    <div class="card ">
        <div class="card-header bg-warning text-white font-weight-bold">
            <span>محصولات پر فروش</span>
        </div>
        <div class="center slider w-100 p-0 card-block">
            <div class="main-carousel"
                 data-flickity='{ "cellAlign": "left", "contain": true }'>
                <div class="carousel-cell"><img src="image/biogelz.jpg" alt="aks" width="300" height="300"></div>
                <div class="carousel-cell"><img src="image/labani.jpg" alt=""  width="300" height="300"></div>
                <div class="carousel-cell"><img src="image/zhele.jpg" alt=""  width="300" height="300"></div>
                <div class="carousel-cell"><img src="image/soop.png" alt=""  width="300" height="300"></div>
                <div class="carousel-cell"><img src="image/nokhod.jpg" alt=""  width="300" height="300"></div>
                <div class="carousel-cell"><img src="image/soop.png" alt=""  width="300" height="300"></div>
                <div class="carousel-cell"><img src="image/labani.jpg" alt=""  width="300" height="300"></div>
                <div class="carousel-cell"><img src="image/biogelz.jpg" alt="aks" width="300" height="300"></div>
                <div class="carousel-cell"><img src="image/soop.png" alt=""  width="300" height="300"></div>
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
