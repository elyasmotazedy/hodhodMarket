<?php require("../../includes/init.php"); ?>
<?php session_start(); ?>



<?php include(SECTION_PATH."/admin_header.php"); ?>

<div class="container">
    <h1 class="mt-3">Create new Product: </h1>
    <div class="container mt-2">
        <a class="mt-4" href="<?php echo WWW_ROOT."/admin/product"; ?>"><i class="fa fa-arrow-left" aria-hidden="true">&nbsp;</i>Return</a>
    </div>
    <form class="" action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <div class="form-group row">
            <label for="title" class="col-2 col-form-label">Title</label>
            <div class="col-10">
                <input class="form-control" type="text" placeholder="Product Name" id="title">
            </div>
        </div>
        <div class="form-group">
            <label class="col-2 col-form-label" for="category">category</label>
            <select  class="form-control col-9" id="category" value="Choose Category">
                <option value="">first</option>
                <option value="">second</option>
                <option value="">third</option>
            </select>
        </div>
    </form>
</div>

<?php include(SECTION_PATH."/admin_footer.php"); ?>
