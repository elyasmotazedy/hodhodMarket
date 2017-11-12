<?php require("../../includes/init.php"); ?>
<?php session_start(); ?>
<?php
if(isset($_POST["Creator"])) {
    if ($_SERVER['SERVER_METHOD'] === "POST") {

    }
}
?>
<?php include(SECTION_PATH."/admin_header.php"); ?>

<div class="container">
    <h1 class="mt-3">Create new Product: </h1>
    <div class="container my-4">
        <a href="<?php echo WWW_ROOT."/admin/product"; ?>"><i class="fa fa-arrow-left" aria-hidden="true">&nbsp;</i>Return</a>
    </div>
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <div class="form-group row">
            <label for="title" class="col-2 col-form-label">Title</label>
            <div class="col-10">
                <input name="title" class="form-control" type="text" placeholder="Product Name" id="title">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-2 col-form-label" for="category">category</label>
            <div class="col-10">
                <select name="category"  class="form-control" id="category" value="Choose Category">
                    <option value="">first</option>
                    <option value="">second</option>
                    <option value="">third</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-2 col-form-label" for="price">Price</label>
            <div class="input-group col-10">
                <input class="form-control" type="number" name="price" placeholder="Yout Price" id="price" >
                <span class="input-group-addon">تومان</span>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-2 col-form-label" for="discount">Discount</label>
            <div class="input-group col-10">
                <input class="form-control" type="number" name="discount" placeholder="Your Discount" id="discount" />
                <span class="input-group-addon">تومان</span>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-2 col-form-label" for="brand">Brand</label>
            <div class="col-10">
                <input class="form-control" type="text" name="brand" placeholder="Enter Product Brand" id="brand">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-2 col-form-label" for="weight">Weight</label>
            <div class="input-group col-10">
                <input class="form-control" type="text" name="weight" id="weight" placeholder="Product Weight">
                <span class="input-group-addon">kg</span>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-2 col-form-label" for="date-product">Product Date</label>
            <div class='input-group date col-10' id='datetimepicker1'>
                <input id="datepicker1"  type='text' class="form-control" value="<?php echo date('Y-m-d'); ?>"/>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-2 col-form-label" for="Expiration">Expiration Date</label>
                <div class='input-group date col-10' id='datetimepicker2'>
                    <input id="datepicker2" type='text' class="form-control" value="<?php echo date('Y-m-d'); ?>"  min="<?php echo date('Y-m-d'); ?>"/>
                </div>
            </div>
        <div class="form-group row">
            <label class="col-2 col-form-label" for="description">Description</label>
            <div class="col-10">
                <textarea class="form-control" id="description" name="description" rows="12" cols="100"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-2 col-form-label btn btn-success" for="Image">Image Prodcut</label>
            <div class="bg-faded col-10">
                <input style="display:none" class="form-control" type="file" name="image" id="Image"/>
            </div>
        </div>
        <div class="form-group row text-right">
            <button class="form-control btn btn-primary col-2 my-4" type="submit" name="Creator">Create</button>
        </div>
    </form>
</div>

<?php include(SECTION_PATH."/admin_footer.php"); ?>
