<?php 
include 'header_admin.php';
include '../conn.php';  
$select="SELECT cat_name FROM category"; 
$q=mysqli_query($conn,$select);
?>

<title>Add Product</title>
<link rel="stylesheet" href="../navbar_d/css/login.css">
<br>
<center>
    <div class="container mt-3" style="margin-top:50px;">
        <div class=" polaroid sticky-sm-top">
            <form action="insert.php" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <h2 class="">Add Sub Category</h2>
                        <div class="input-group mb-3 mt-4">
						  <select class="form-select"  id="inputGroupSelect02" name="cat_name">
						    <option selected>Select Category First</option>
                            <?php  
                                    while($row=mysqli_fetch_array($q))
                                    {
                                        ?>
                                            <option><?php echo $row['cat_name']; ?></option>
                                        <?php
                                    }
                                ?>                                    
						  </select>
						</div>
                        <input type="text" name="sub_category_name" placeholder="Enter Sub category name" class="form-control mt-4">

                        <input type="file" class="form-control mt-4"  placeholder="Category Image" name="sub_cat_img" required>

                        <input type="submit" style="width: 100%;font-size: 20px;" class="btn btn-outline-secondary mt-4 btnhvr" value="Add Sub category" name="add_sub_category">
                    </div>
                </div>
            </form>
        </div>
    </div>
</center>


<?php 
include 'footer.php';
?>