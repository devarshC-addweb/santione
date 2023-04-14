<?php 
include 'header_admin.php';
include '../conn.php';

$q="SELECT * FROM product";
$result=mysqli_query($conn,$q);
//$row=mysqli_fetch_assoc($result);
?>

<style>
	.hvricon: hover{
	color: black;
}
div.polaroid {
    /*width: 10%;*/
    box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2), 0 3px 10px 0 rgba(0, 0, 0, 0.10);
    text-align: center;
    padding: 40px;
    border-radius: 10px;
}
.wrapper{
	width: 95%;
}
</style>
<div class="container wrapper" style="background-color:;">
	<div class="row">
		<div class="col-12">
			<h2 align="center" class="p-1">Product's</h2>
		</div>
	</div>
	<div class="row p-1">
		<div class="col-12 polaroid" style="background-color:;">
			<div class="table-responsive"><!-- table-responsive -->
				<table class="table table table-hover">
				  <thead>
				    <tr>
				      <th scope="col" class="p-4">Product Id</th>
				      <th scope="col">Category Name</th>
				      <th scope="col">Sub Category Name</th>
				      <th scope="col">Product Name</th>
				      <th scope="col">Product Price</th>
				      <th scope="col">Product Img 1</th>
				      <th scope="col">Product Img 2</th>
				      <th scope="col">Product Img 3</th>
				      <th scope="col">Product Description</th>
				      <th scope="col">Active OR Not</th>
				      <th scope="col">Date & Time</th>
				      <th scope="col">Ip Server</th>
				      <th scope="col">Action</th>
				    </tr>
				  </thead>

				  <?php 
				  while($row=mysqli_fetch_assoc($result))
				  {
					$pro_id=$row['pro_id'];
				  	?>
				  		<tr>
						  	<th scope="col"><?php echo $row['pro_id']; ?></th>
						  	<th scope="col"><?php echo $row['cat_name']; ?></th>
						  	<th scope="col"><?php echo $row['sub_cat_name']; ?></th>
						  	<th scope="col"><?php echo $row['pro_name']; ?></th>
						  	<th scope="col"><?php echo $row['pro_price']; ?></th>
						  	<th scope="col"><img src="<?php echo $row['pro_img_1']; ?>" width="150px" style="height: 180px; width: 150px;" class="p-1"></th>
						  	<th scope="col"><img src="<?php echo $row['pro_img_2']; ?>" width="150px" style="height: 180px; width: 150px;" class="p-1"></th>
						  	<th scope="col"><img src="<?php echo $row['pro_img_3']; ?>" width="150px" style="height: 180px; width: 150px;" class="p-1"></th>
						  	<th scope="col" table-responsive><?php echo $row['pro_description']; ?></th>
						  	<th scope="col"><?php echo $row['in_active']; ?></th>
						  	<th scope="col"><?php echo $row['date_time']; ?></th>
						  	<th scope="col"><?php echo $row['ip_server']; ?></th>
						  					  
							<th scope="col">

								<a href="<?php echo "update_product.php?pro_id=$pro_id";?>"><i class="bi bi-pencil-square hvricon" style="font-size: 1.5rem; color: green; letter-spacing: 1.0rem;"></i></a>
								
								<a href="<?php echo "delete.php?pro_id=$pro_id";?>"><i class="bi bi-trash-fill" style="font-size: 1.5rem; color: red; letter-spacing:0.5rem;"></i></a>
						  	</th>
						</tr>
				  	<?php
				  }
				  ?>

				</table>
			</div>
		</div>
	</div>
</div>
<?php 
include 'footer.php';
?>
