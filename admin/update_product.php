<?php 
include 'header_admin.php';
include '../conn.php';

$pro_id=$_GET['pro_id'];
$q="SELECT * FROM product WHERE pro_id='$pro_id'";
$result=mysqli_query($conn,$q);
$row=mysqli_fetch_array($result);

$pro_id=$row['0'];
$cat_name=$row['1'];
$sub_cat_name=$row['2'];
$pro_name=$row['3'];
$pro_price=$row['4'];
$pro_img_1=$row['5'];
$pro_img_2=$row['6'];
$pro_img_3=$row['7'];
$pro_description=$row['8'];
$pro_active=$row['9'];
$date_time=$row['10'];
$ip_server=$row['11'];

?>

<title>update Product</title>
<link rel="stylesheet" href="../navbar_d/css/login.css">
<style>
    div.polaroid {
    width: 90%;
    box-shadow: 0 1px 2px 0 #b5f786, 0 0px 5px 0 lime;
    text-align: center;
    padding: 30px;
    border-radius: 10px;
}
input.btnupdate:hover{
    background-color: #b5f786;
    color: black;
}

</style>
<br>
<center>
    <div class="container ">
        <div class="polaroid sticky-sm-top">
            <form action="edit_product.php?pro_id=<?php echo $pro_id; ?>" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <h2 style="margin-top:-20px;">update Product</h2>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        
                        <div class="form-floating">
                            <input type="text" name="cat_name" value="<?php echo $cat_name; ?>" class="form-control mt-2">
                            <label for="floatingTextarea2">Category Name</label>
                        </div>

                        <div class="form-floating">
                            <input type="text" name="pro_name" value="<?php echo $pro_name; ?>" class="form-control mt-3">
                            <label for="floatingTextarea2">Product Name</label>
                        </div>

                        <div class="form-floating">
                            <textarea class="form-control mt-3"   id="floatingTextarea2" style="height: 100px" name="pro_description"><?php echo $pro_description; ?></textarea>
                            <label for="floatingTextarea2">Product Description</label>
                        </div>

                        <div class="form-floating">
                            <input type="text" name="sub_cat_name" value="<?php echo $sub_cat_name; ?>" class="form-control mt-3">
                            <label for="floatingTextarea2">Sub Category name</label>
                        </div>

                        <div class="form-floating">
                            <input type="number" name="pro_price" value="<?php echo $pro_price; ?>" class="form-control mt-3">
                            <label for="floatingTextarea2">Product Price</label>
                        </div>

                        <div class="form-floating">
                            <input type="number" name="in_active" value="<?php echo $pro_active;   ?>" class="form-control mt-3">
                            <label for="floatingTextarea2">Product Active OR Not</label>
                        </div>
                        
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-4" style="background-color:;">
                                <img src="<?php echo $pro_img_1; ?>" style="height: 154px; width: 150px;" class=" mt-2">                                
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-8" style="background-color:;">
                                <label style="float:left; color: ;" class="mt-2 fw-bold">Image 1</label>
                                <input type="file" class="form-control mt-2" name="pro_img_1">
                            </div>  
                        </div>
                         <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-4" style="background-color:;">
                                <img src="<?php echo $pro_img_2; ?>" style="height: 154px; width: 150px;" class=" mt-2">                                
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-8" style="background-color:;">
                                <label style="float:left; color: ;" class="mt-2 fw-bold">Image 2</label>
                                <input type="file" class="form-control mt-2" name="pro_img_2">
                            </div>  
                        </div>
                         <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-4" style="background-color:;">
                                <img src="<?php echo $pro_img_3; ?>" style="height: 154px; width: 150px;" class=" mt-2">                                 
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-8" style="background-color:;">
                                <label style="float:left; color: ;" class="mt-2 fw-bold">Image 3</label>
                                <input type="file" class="form-control mt-2" name="pro_img_3">
                            </div>  
                        </div>
                    </div>
                </div>
                <input type="submit" style="width: 100%;font-size: 20px; background-color: ;" class="btn btn-outline-secondary mt-2 btnupdate" value="Update Product" name="update_product">
            </form>
            <a href="show_product.php">
                <button style="width: 100%;font-size: 20px;" class="btn btn-outline-secondary mt-3 btnhvr">Back</button>
            </a>
        </div>
    </div>
</center>

<?php 
include 'footer.php';
?>
