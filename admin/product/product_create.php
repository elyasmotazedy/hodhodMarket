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
            <div class="col-10">
                <input class="form-control" type="number" name="price" placeholder="Yout Price" id="price" >
            </div>
        </div>
        <div class="form-group row">
            <label class="col-2 col-form-label" for="discount">Discount</label>
            <div class="col-10">
                <input class="form-control" type="number" name="discount" placeholder="Your Discount" id="discount" />
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
            <div class="col-10">
                <input class="form-control" type="text" name="weight" id="weight" placeholder="Product Weight">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-2 col-form-label" for="description">Description</label>
            <div class="col-10">
                <textarea class="form-control" id="description" name="description" rows="12" cols="100"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-2 col-form-label" for="Image">Image Prodcut</label>
            <div class="col-10">
                <input class="form-control" type="file" name="image" id="Image"/>
            </div>
        </div>
        <div class="form-group row text-right">
            <button class="form-control btn btn-primary col-2 my-4" type="submit" name="Creator">Create</button>
        </div>
    </form>
</div>

<?php include(SECTION_PATH."/admin_footer.php"); ?>
