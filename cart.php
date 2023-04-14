<?php 
include 'header.php';
include 'conn.php';

$q="SELECT * FROM cart";
$check=mysqli_query($conn,$q);



?>

<center>
  <div class="container" style="background-color:;">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 mt-2" style="background-color:#94f79;">
          <h3 style="color:;">CART</h3>
          <h3 style="color:; font-size: 18px;">Continew Shopping</h3>
      </div>
    </div>
  </div>
</center>

<center>
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-12 col-sm-12 mt-2">
				<?php 
			while($row=mysqli_fetch_assoc($check))
			{
				?>
						<div class="row mt-4" style="background-color:;">

						<div class="col-lg-12 col-md-12 col-sm-12 " style="background-color:;">

							<div class="row">
								<div class="col-lg-3 col-md-12 col-sm-12 mt-2"style="background-color:;">
									<img src="<?php echo $row['cart_pro_img']; ?>" style="width:150px;">
								</div>

								<div class="col-lg-9 col-md- col-sm-12 mt-5">
									<div class="row">
										<div class="col-lg-8 col-md-12 col-sm-12 mt-2" >
											<h4 class="float-start"><?php echo $row['car_prot_name']; ?></h4>
										</div>
										<div class="col-lg-8 col-md-12 col-sm-12 mt-2">
											<h4 class="float-start" style="margin-top:12px;"><?php echo $row['cart_pro_price']; ?></h4>
											<h4 class="float-end">
												<!-- <form method="get" action="insert.php<?php //echo $id; ?>"> -->
													<a href="cartdelete.php?id=<?php echo $row['cart_id'];  ?>">
													<input type="submit" name="removecart" value="Remove" class="btn cartremove" style="width:110px; height:50px; border:1px solid black; ">
													</a>	
												<!-- </form> -->
											</h4>
										</div>
										<div class="col-lg-8 col-md-12 col-sm-12 mt-2">
											<h4 class="float-start">type : dress</h4>
										</div>
									</div>
								</div>
							</div>
							</div>
						</div>
				<?php 
			}
			?>
			</div>

			<div class="col-lg-4 col-md-12 col-sm-12 mt-5">
					
					<div class="row" style="background-color:;">
						<div class="col-lg-6 col-md-12 col-sm-12 btn cartborderhve mx-2" style="background-color:;">
							<i class="bi bi-truck" style="font-size: 4rem; color:black;">
								
							</i>

						</div>

						<div class="col-lg-6 col-md-12 col-sm-12 btn cartborderhve mx-"  style="background-color:;">
							<i class="bi bi-shop" style="font-size: 4rem; color:black;"></i>
						</div>
					</div>
					<br>
					<h3 class="float-start" style="font-size:19px;">Order Note</h3>
					<hr>
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 btn float-start" style="background-color:gre;">
							
							<form method="POST" action="insert.php">
								<input type="text" name="" class="carttext">
							</form>

						</div>
					</div>
					<br>
					<hr style="color:black">

					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12" style="background-color:;">
							<h3 style="font-size:20px; float: left;">Subtotal</h3>
						</div>

						<div class="col-lg-6 col-md-6 col-sm-12" style="background-color:;">
							<h3 style="font-size:20px; float:right;">49.00</h3>
						</div>
					</div>
					<br>
					<h3 style="font-size:15px;">Shipping, taxes, and discount codes calculated at checkout.</h3>
			</div>

			</div>
		</div>
</center>

<?php 
include 'footer.php';
?>