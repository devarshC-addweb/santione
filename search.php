<?php 
include 'header.php';
include 'conn.php';
?>

<center>
  <div class="container" style="background-color:;">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12" style="background-color:;">
          <h3 style="color: ;">Search Product</h3>
          <hr class="line"> 
      </div>
    </div>
  </div>
</center>

<!-- image card in  -->

<center>
<div class="container" style="background-color:;">
  <div class="row">

<?php 
	if(isset($_POST['search']))
	{
	  // $search=$_POST['search'];

	  if($search=$_POST['search'])
	  {

	    //"SELECT * FROM articles WHERE (`title` LIKE '%".$query."%') OR (`text` LIKE '%".$query."%')")
	    $query="SELECT * FROM product WHERE sub_cat_name LIKE '%$search%' OR pro_name LIKE '%$search%'";  
	    $result=mysqli_query($conn,$query);
	  
	    while($row=mysqli_fetch_assoc($result))
	    {
	      ?>
	          <div class="col-lg-3 col-md-6 col-sm-12 p-1 mt-4" style="background-color:;">
	            <div class="imgcard">
	                <a href="product.php?id=<?php echo $row['pro_id']; ?>">
	                  <img class="img" src="<?php echo 'admin/'.$row['pro_img_1']; ?>" style="width:90%; height: 40%;">
	                  <br>
	                    <label class="proname mt-1 fw-bold"><?php echo $row['pro_name']; ?></label><br>
	                    <label class="proname mt-1 fw-bold">₹ <?php echo $row['pro_price']; ?></label>
	                </a>
	            </div>
	          </div>
	      <?php
	    }
	  }
	  else
	  {
	  	?>
	  		<h2><?php echo "Product Not Available"; ?></h2>
	  	<?php
	  }
  }
  ?> 	
  </div>
	</div>
	</center>



<?php 
include 'footer.php';
?>

