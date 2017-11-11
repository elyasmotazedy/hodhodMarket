<?php require("../../includes/init.php"); ?>
<?php session_start(); ?>
<?php include(SECTION_PATH."/admin_header.php"); ?>

<div class="container">
    <h1 class="mt-3">Prodcut Page: </h1>
    <div class="container mt-2">
        <a class="d-inline-block mt-4 mr-3" href="<?php echo WWW_ROOT."/admin"; ?>"><i class="fa fa-arrow-left" aria-hidden="true">&nbsp;</i>Return</a>
        <p class="d-inline-block"><a href="<?php echo WWW_ROOT."/admin/product/product_create.php"; ?>"><i class="fa fa-plus-square" aria-hidden="true"></i>
Create Product</a></p>
    </div>
    <table class="table table-hover mt-5">
        <tr>
            <th>ID</th>
            <th>Image</th>
            <th>Title</th>
            <th>category</th>
            <th>Price</th>
            <th>Discount</th>
            <th>Brand</th>
            <th>Weight</th>
            <th>Description</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
        </tr>
        <tr>
            <td>1</td>
            <td></td>
            <td>first product</td>
            <td>some</td>
            <td>21321</td>
            <td>1234</td>
            <td>lono</td>
            <td>3kg</td>
            <td>this is some text for first product</td>
            <td><a href="#">Read</a></td>
            <td><a href="#">Edit</a></td>
            <td><a href="#">Delete</a></td>
        </tr>
    </table>

</div>

<?php include(SECTION_PATH."/admin_footer.php"); ?>
