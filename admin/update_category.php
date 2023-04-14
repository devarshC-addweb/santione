<?php 
include 'header_admin.php';
include '../conn.php';

$cat_id=$_GET['cat_id'];
$q="SELECT * FROM category WHERE cat_id='$cat_id'";
$result=mysqli_query($conn,$q);
$row=mysqli_fetch_array($result);

$cat_id=$row['0'];
$cat_name=$row['1'];
$cat_img=$row['2'];

?>

<title>update category</title>
<link rel="stylesheet" href="../navbar_d/css/login.css">
<style>
	div.polaroid {
    width: 50%;
    box-shadow: 0 1px 2px 0 #b5f786, 0 0px 5px 0 lime;
    text-align: center;
    padding: 40px;
    border-radius: 10px;
}
input.btnupdate:hover{
	background-color: #b5f786;
	color: black;
}
</style>
<br>
<center>
    <div class="container mt-3" style="margin-top:50px;">
        <div class="polaroid sticky-sm-top">
            <form action="edit_category.php?cat_id=<?php echo $cat_id; ?>" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <h2 class="">Update Category</h2>
                        
                        <!-- <input type="text" name="cat_name" value="<?php echo $cat_id ?>" class="form-control mt-4" required> -->

                        <input type="text" name="cat_name" value="<?php echo $cat_name ?>" class="form-control mt-4" required>

                        <img src="<?php echo $cat_img; ?>" style="height: 100px; width: 150px;" class=" mt-4">

                        <input type="file" class="form-control mt-4"  placeholder="Category Image" name="cat_img" >

                        <input type="submit" style="width: 100%;font-size: 20px;" class="btn btn-outline-secondary mt-4 btnupdate" value="Update category" name="update_category"> 

                    </div>
                </div>
            </form>
            <a href="show_category.php">
                <button style="width: 100%;font-size: 20px;" class="btn btn-outline-secondary mt-4 btnhvr">Back</button>
            </a>
        </div>
    </div>
</center>


<?php 
include 'footer.php';
?>