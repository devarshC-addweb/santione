<?php 
include 'header.php';
include 'conn.php';
$id=$_GET['id'];

$q="SELECT * FROM product WHERE pro_id=".$id;
$check=mysqli_query($conn,$q);
$row=mysqli_fetch_assoc($check);

?>
<center>
  <div class="container mt-2" style="background-color:;">
    <div class="row">
      
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php" class="breadline " data-bs-toggle="tooltip" data-bs-placement="bottom" title="Home">Home</a></li>
          <li class="breadcrumb-item"><a href="clothing.php" class=" breadline" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Go Clothing Page">Back</a></li>
          <li class="breadcrumb-item active" aria-current="page">Product - <?php echo $row['pro_name']; ?></li>
        </ol>
      </nav>

      

      <!-- first collumn of screen -->
      <div class="col-lg-6 col-md-12 col-sm-12 " style="background-color:;">
      	<div class="row">
      		<div class="col-lg-2 col-md-12 col-sm-12 ">
      			<div class="row mt-4">
      				<img src="<?php echo 'admin/'.$row['pro_img_1']; ?>" style="width:100%;">
      			</div>
      			<div class="row mt-4">
      				<img src="<?php echo 'admin/'.$row['pro_img_2']; ?>" style="width:100%;">
      			</div>
      			<div class="row mt-4">
      				<img src="<?php echo 'admin/'.$row['pro_img_3']; ?>" style="width:100%;">
      			</div>
      			<div class="row mt-4">
      				<img src="<?php echo 'admin/'.$row['pro_img_2']; ?>" style="width:100%;">
      			</div>
      			<div class="row mt-4">
      				<img src="<?php echo 'admin/'.$row['pro_img_3']; ?>" style="width:100%;">
      			</div>
      		</div>

      		<div class="col-lg-10 col-md-12 col-sm-12 mt-4">
      			<img src="<?php echo 'admin/'.$row['pro_img_1']; ?>" style="width:100%;">
      		</div>

      	</div>
      </div>




      <!-- second collumn of sreen -->
      <div class="col-lg-6 col-md-12 col-sm-12" style="background-color:; ">
          <div class="row">
          	<div class="col-lg-12 col-md-12 col-sm-12 mt-4">
          		<h4 class="float-start mx-5 fw-bold" style="letter-spacing:3px;"><?php echo $row['pro_name']; ?></h4>
          	</div>
          </div>

           <div class="row">
          	<div class="col-lg-12 col-md-12 col-sm-12 mt-3">
          		<h4 class="float-start mx-5 fw-bold" style="letter-spacing:3px; font-size:12px ;"><b class="bw-bold">Rs.</b> <?php echo $row['pro_price']; ?></h4>
          	</div>
          </div>

          <div class="row">
          	<div class="col-lg-6 col-md-12 col-sm-12 mt-3">
          		<h4 class="float-start mx-5 fw-bold" style="letter-spacing:3px;">Produt Type</h4>
          	</div>

          </div>

           <div class="row">
          	<div class="col-lg-12 col-md-12 col-sm-12 mt-3">
          		<h4 class="float-start mx-5 fw-bold" style="letter-spacing:3px; font-size:12px ;">Women : <?php echo $row['sub_cat_name']; ?></h4>
          	</div>
          </div>

          <!-- <hr class="float-start mx-5 mt-3" style="color:black; width:80%; height:2px;"><br> -->

          <div class="row">
          	<div class="col-lg-12 col-md-12 col-sm-12 mt-3">
          		<h4 class="float-start mx-5 fw-bold" style="letter-spacing: 1px;">Description:</h4>
          	</div>
          </div>
          <div class="row">
          	<div class="col-lg-12 col-md-12 col-sm-12" style="background-color: ;">
          		<h4 class="float-start mx-5" style="letter-spacing: 1px;"><?php echo $row['pro_name']; ?></h4>
          	</div>
          </div>

          <hr style="color:black;">

          <!-- loader code  -->
       <!--    <center>
            <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 mt-" style="background-color: ;">
              <h4 style="color:#25D366;">Direct Inqiry Click</h4>
              <div class="col-lg-12 col-md-12 col-sm-10 mt-3" style="background-color:;">
              <div class="loader-wrapper">
                <div class="loader">
                  <div class="loader loader-inner">
                    <a href="//api.whatsapp.com/send?phone=919408594025&text=<?php//  echo $row['pro_description']; ?> "
                     class="linkwhatsapp"><i class="bi bi-whatsapp" style="font-size: 2rem;"></i></a>
                  </div>
                </div>
              </div>
            </div>
              
            </div>
          </div>
          </center> -->

           <center>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-10 mt-2" style="background-color:;">
                  <h4 style="color:;">Product Waiting You, Click Fast For More Details</h4>
                  <main>
                    <div class="container text-center">
                      <a href="//api.whatsapp.com/send?phone=919408594025&text=<?php echo $row['pro_name']; ?><?php echo $row['pro_price']; ?>"
                       class="linkwhatsapp  wobble-vertical-on-hover mt-3" style="margin-top:10px;"><i class="bi bi-whatsapp" style="font-size: 2rem;"></i></a>
                    </div>
                  </main>
                </div>
            </div>
          </center>



          <center>
          	<div class="row">
          	<div class="col-lg-12 col-md-12 col-sm-12 mt-2" style="background-color: ;">
          		<form method="POST" action="insert.php?id=<?php echo $id; ?>">
          			<input type="submit" name="addcart" class=" mx-5 fw-bold mt-4" value="Add To Cart" style="margin-top: 20px;">
          		</form>
          	</div>
          </div>
          </center>

          

          <div class="row">
          	<div class="col-lg-12 col-md-12 col-sm-12" style="background-color: ;">
          		<form >
          			<input type="submit" name="" class="float-start mx-5 fw-bold mt-4" value="Buy It Now">
          		</form>
          	</div>
          </div>


      </div>

    </div>
  </div>
</center>


<?php 
include 'footer.php';
?>