<?php 
include 'header_admin.php';
include '../conn.php';  

//fetch query category_name from category table .......

$select="SELECT cat_name FROM category"; 
$q=mysqli_query($conn,$select);

//fetch query sub_category_name from sub_category table .......

$select2="SELECT sub_cat_name FROM sub_category"; 
$q2=mysqli_query($conn,$select2);

?>
<title>Add Product</title>
<link rel="stylesheet" href="../navbar_d/css/login.css">
<br>
<center>
    <div class="container mt-3" style="margin-top:;">
        <div class="polaroid sticky-sm-top">
            <form action="insert.php" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <h2 class="">Add Product</h2>
                        <div class="input-group mb-3 mt-4">
						  <select class="form-select" id="inputGroupSelect02" name="cat_name">
						  	<option selected>Select Category</option>
						    <?php  
                                while($row=mysqli_fetch_array($q))
                                {
                                    ?>
                                        <option ><?php echo $row['cat_name']; ?></option>
                                    <?php
                                }
                            ?>  
						  </select>
						  <!-- <label class="input-group-text" for="inputGroupSelect02">Options</label> -->
						</div>
						<div class="input-group mb-3 mt-4">
						  <select class="form-select" id="inputGroupSelect02" name="sub_cat_name">
						    <option selected>Select Sub Category</option>
						    <?php  
                                while($row2=mysqli_fetch_array($q2))
                                {
                                    ?>
                                        <option><?php echo $row2['sub_cat_name']; ?></option>
                                    <?php
                                }
                            ?> 
						  </select>
						  <!-- <label class="input-group-text" for="inputGroupSelect02">Options</label> -->
						</div>

						<div class="form-floating">
							<input type="text" name="pro_name" placeholder="Product Name" class="form-control mt-4"> 
							<label for="floatingTextarea1">Product Name</label>
						</div>

                    	<div class="form-floating">
							<input type="text" name="pro_price" placeholder="Product Price" class="form-control mt-4">
							<label for="floatingTextarea2">Product Price</label>
						</div>
                        

                        <label style="float:left; color: ;" class="mt-3 fw-bold">Image 1</label>
                        <input type="file" class="form-control mt-5" name="pro_img_1">

                        <label style="float:left; color: ;" class="mt-3 fw-bold">Image 2</label>
                        <input type="file" class="form-control mt-5" name="pro_img_2">

                        <label style="float:left; color: ;" class="mt-3 fw-bold">Image 3</label>
                        <input type="file" class="form-control mt-5" name="pro_img_3">

                       <div class="form-floating">
							<textarea class="form-control mt-4" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="pro_description"></textarea>
							<label for="floatingTextarea2">Product Description</label>
						</div>

                        <div class="form-floating">
                            <input type="text" name="in_active" placeholder="Product Price" class="form-control mt-4">
                            <label for="floatingTextarea2">Product Active OR Not</label>
                        </div>

                        <input type="submit" style="width: 100%;font-size: 20px; background-color: ;" class="btn btn-outline-secondary mt-4 btnhvr" value="Add Product" name="add_product">
                    </div>
                </div>
            </form>
        </div>
    </div>
</center>


<?php 
include 'footer.php';
?>