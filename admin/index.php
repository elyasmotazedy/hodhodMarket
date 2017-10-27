<?php include("../includes/section/admin_header.php"); ?>
<?php
	$categories = [
		["id"=>"1","category_name"=>"volvo"],
		["id"=>"1","category_name"=>"Saab"],
		["id"=>"1","category_name"=>"VW"],
		["id"=>"1","category_name"=>"Audi"],
	];
?>

    <div class="container-fliud text-right" style="background-color: white">

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
                <select disabled>
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
                    <h3>HOD HOd</h3>
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
                </div><!-- end .card -->
            </div> <!-- col-md-12 -->
        </div><!-- end .row -->
    </div><!-- end .container -->

</body>
</html>
