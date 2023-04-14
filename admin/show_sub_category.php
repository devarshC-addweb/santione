<?php 
include 'header_admin.php';
include '../conn.php';

$q="SELECT * FROM sub_category";
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
			<h2 align="center" class="p-1">Sub Category</h2>
		</div>
	</div>
	<div class="row p-1">
		<div class="col-12 polaroid" style="background-color:;">
			<div class="table-responsive"><!-- table-responsive -->
				<table class="table table-sm table-hover">
				  <thead>
				    <tr>
				      <th scope="col">Sub_Cat_Id</th>
				      <th scope="col">Cat_Name</th>
				      <th scope="col">Sub_Cat_Name</th>
				      <th scope="col">Sub_Cat_iamge</th>
				      <th scope="col">Action</th>
				    </tr>
				  </thead>

				  <?php 
				  while($row=mysqli_fetch_assoc($result))
				  {
					$sub_cat_id=$row['sub_cat_id'];
				  	?>
				  		<tr>
						  	<th scope="col"><?php echo $row['sub_cat_id']; ?></th>
						  	<th scope="col"><?php echo $row['cat_name']; ?></th>
						  	<th scope="col"><?php echo $row['sub_cat_name']; ?></th>
						  	<th scope="col"><img src="<?php echo $row['sub_cat_img']; ?>" width="150px" style="height: 100px; width: 150px;" class="p-1"></th>				  
							<th scope="col">

								<a href="<?php echo "update_sub_category.php?sub_cat_id=$sub_cat_id";?>"><i class="bi bi-pencil-square hvricon" style="font-size: 1.5rem; color: green; letter-spacing: 1.0rem;"></i></a>
								
								<a href="<?php echo "delete.php?sub_cat_id=$sub_cat_id";?>"><i class="bi bi-trash-fill" style="font-size: 1.5rem; color: red; letter-spacing:0.5rem;"></i></a>
		
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
