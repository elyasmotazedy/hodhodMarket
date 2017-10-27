<?php include("../includes/section/admin_header.php"); ?>
<?php
	$cat_main = [
		["cat_id"=>"1","category_name"=>"volvo"],
		["cat_id"=>"2","category_name"=>"Saab"],
		["cat_id"=>"3","category_name"=>"VW"],
		["cat_id"=>"4","category_name"=>"Audi"],
	];
	$cat_sub1 = [
		["cat_id"=>"1","cat_main"=>"1","category_name"=>"volvo"],
		["cat_id"=>"2","cat_main"=>"1","category_name"=>"Saab"],
		["cat_id"=>"3","cat_main"=>"3","category_name"=>"VW"],
		["cat_id"=>"4","cat_main"=>"4","category_name"=>"Audi"],
	];
	$post_product = [
		["pro_id"=>"1","cat_sub1_id"=>"2","pro_header"=>"hodhod","pro_cat"=>"لبنیات","product"=>"پنیر","price"=>"2000","discount"=>"1500","pro_brand"=>"لئوناردو","pro_weight"=>"420","pro_country"=>"ایران"],
		["pro_id"=>"2","cat_sub1_id"=>"3","pro_header"=>"hodhod","pro_cat"=>"انجماد","product"=>"کالباس","price"=>"5000","discount"=>"4500","pro_brand"=>"لئوناردو","pro_weight"=>"105","pro_country"=>"ایران"],
		["pro_id"=>"3","cat_sub1_id"=>"1","pro_header"=>"hodhod","pro_cat"=>"مصرفی","product"=>"مایغ ظرفشویی","price"=>"4000","discount"=>"3500","pro_brand"=>"لئوناردو","pro_weight"=>"710","pro_country"=>"ترکیه"],
		["pro_id"=>"4","cat_sub1_id"=>"1","pro_header"=>"hodhod","pro_cat"=>"عمومی","product"=>"چسب","price"=>"500","discount"=>"-","pro_brand"=>"لئوناردو","pro_weight"=>"30","pro_country"=>"آلمان"],
	];
?>

    <div class="container-fliud" style="background-color: white">

        <div class="row">
            <span class="col-md-12">دسته بندی ها</span>
        </div>
        <div class="row">
            <div class="col-md-3">
                <span>دسته بندی کلی</span>
                <select>

					<?php foreach ($cat_main as $category): ?>
						<option value="<?php echo $category['id']; ?>"><?php echo $category['category_name']; ?></option>
					<?php endforeach; ?>

                </select>
            </div>
            <div class="col-md-3">
                <span>محصولات</span>
                <select>

					<?php foreach ($cat_sub1 as $category): ?>
						<option value="<?php echo $category['category_name']; ?>"><?php echo $category['category_name']; ?></option>
					<?php endforeach ?>

                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class=""><span >لیست پست ها</span></div>

				<?php foreach ($post_product as $product): ?>
						<div class="card" style="display: inline !important">
		                    <h3><?php echo $product['pro_header']; ?></h3>
		                    <span>دسته بندی:</span>
		                    <span><?php echo $product['pro_cat']; ?></span>
		                    <span>محصول:</span>
		                    <span><?php echo $product['product']; ?></span>
		                    <p class="title">قیمت</p>
		                    <span><?php echo $product['price']; ?></span>
		                    <p class="title">قیمت با تخفیف</p>
		                    <span><?php echo $product['discount']; ?></span>
		                    <p class="title">توضیحات اضافی</p>
		                    <ul>
		                        <li>برند : <?php echo $product['pro_brand']; ?></li>
		                        <li>وزن (گرم) :<?php echo $product['pro_weight']; ?></li>
		                        <li>کشور تولید کننده : <?php echo $product['pro_country']; ?></li>
		                    </ul>
		                </div><!-- end .card -->
				<?php endforeach; ?>

            </div> <!-- col-md-12 -->
        </div><!-- end .row -->
    </div><!-- end .container -->

</body>
</html>
