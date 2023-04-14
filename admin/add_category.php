<?php 
include 'header_admin.php';
?>
<title>Add Product</title>
<link rel="stylesheet" href="../navbar_d/css/login.css">
<br>
<center>
    <div class="container mt-3" style="margin-top:50px;">
        <div class="polaroid sticky-sm-top">
            <form action="insert.php" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <h2 class="">Add Category</h2>
                        
                        <input type="text" name="cat_name" placeholder="Enter category name" class="form-control mt-4" required>

                        <input type="file" class="form-control mt-4"  placeholder="Category Image" name="cat_img" required>

                        <input type="submit" style="width: 100%;font-size: 20px;" class="btn btn-outline-secondary mt-4 btnhvr" value="Add category" name="add_category">
                    </div>
                </div>
            </form>
        </div>
    </div>
</center>


<?php 
include 'footer.php';
?>