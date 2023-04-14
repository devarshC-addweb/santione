<?php 
include 'conn.php';
include 'header.php';

if(!$_SESSION['email'])
{
  header('Location:index.php');
}
else
{
  // include 'conn.php';
$email=$_SESSION['email'];
$q="SELECT fullname FROM users WHERE email='$email'";
$check=mysqli_query($conn,$q);
$row=mysqli_fetch_assoc($check);
$name=$row['fullname'];

}

// session_start();
// if(!$_SESSION['shopname'])
// {
//   header('Location:login.php');
// }
// include 'conn.php';
// $fname=$_SESSION['shopname'];
// $q="SELECT shop_name FROM admin WHERE email='$fname'";
// $check=mysqli_query($conn,$q);
// $row=mysqli_fetch_assoc($check);
// $name=$row['shop_name'];
?>   

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>wb</title>
  <style>
    div{
            
        }
  </style>
</head>
<body>

  

	<div id="carouselExampleCaptions" class="carousel slide container" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active w-100">
      <img src="image/crow1.jpg" class="d-block w-100" alt="">
    </div>
    <div class="carousel-item">
      <img src="image/crow2.jpg" class="d-block w-100" alt="">
    </div>
    <div class="carousel-item">
      <img src="image/crow3.jpg" class="d-block w-100" alt="">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<center>
  <div class="container" style="background-color:;">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 mt-5" style="background-color:;">
          <h3 style="color: ;">Women Sirt</h3>
          <hr class="line">
      </div>
    </div>
  </div>
</center>

<!-- image card in  -->

<center>
<div class="container">
  <div class="row">

    <?php 
    $query="SELECT * FROM product WHERE cat_name='women' AND sub_cat_name='sirt' LIMIT 4;";  
    $result=mysqli_query($conn,$query);
    
    while($row=mysqli_fetch_assoc($result))
    {
      ?>
          <div class="col-lg-3 col-md-6 col-sm-12 p-1 mt-5" style="background-color:;">
            <div class="imgcard">
                <a href="product.php?id=<?php echo $row['pro_id']; ?>">
                  <img class="img" src="<?php echo 'admin/'.$row['pro_img_1']; ?>" style="width:90%; height: 40%;">
                  <br>
                    <label class="proname mt-1 fw-bold"><?php echo $row['pro_name']; ?></label><br>
                    <label class="proname mt-1 fw-bold">₹ <?php echo $row['pro_price']; ?></label>
                </a>
                <br>
                <div class="">
                  <a href="order.php?id=<?php echo $row['pro_id']; ?>" class=" btn btn-dark">Buy Now</a>
                </div>
            </div>
          </div>
      <?php
    }
    ?>

  </div>
</div>
</center>

<center>
  <div class="container" style="background-color:;">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 mt-5" style="background-color:;">
          <h3 style="color: ;">Women Tops</h3>
          <hr class="line">
      </div>
    </div>
  </div>
</center>

<!-- image card in  -->

<center>
<div class="container">
  <div class="row">

    <?php 
    $query="SELECT * FROM product WHERE cat_name='women' AND sub_cat_name='tops' LIMIT 4;";  
    $result=mysqli_query($conn,$query);
    
    while($row=mysqli_fetch_assoc($result))
    {
      ?>
          <div class="col-lg-3 col-md-6 col-sm-12 p-1 mt-5" style="background-color:;">
            <div class="imgcard">
                <a href="product.php?id=<?php echo $row['pro_id']; ?>">
                  <img class="img" src="<?php echo 'admin/'.$row['pro_img_1']; ?>" style="width:90%; height: 40%;">
                  <br>
                    <label class="proname mt-1 fw-bold"><?php echo $row['pro_name']; ?></label><br>
                    <label class="proname mt-1 fw-bold">₹ <?php echo $row['pro_price']; ?></label>
                </a>
                <br>
                <div class="">
                  <a href="order.php?id=<?php echo $row['pro_id']; ?>" class=" btn btn-dark">Buy Now</a>
                </div>
            </div>
          </div>
      <?php
    }
    ?>

  </div>
</div>
</center>

<center>
  <div class="container-fluid" style="background-color">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 p-5" style="background-color:;">
          <h3>Delicious Items</h3>
          <hr class="line">
      </div>
    </div>
  </div>
</center>

<!-- start 1 row img women category -->

<center>
  <div class="container-fluid" style="background-color">
    <div class="row mt-5" style="height: 20%;">
      <div class="col-lg-8 col-md-12 col-sm-12 p-" style="background-color:#ff9999;">
          <a><img src="image/dress.jpg" style="width:auto; height: 400px;"></a>
      </div>
     <div class="col-lg-4 col-md-12 col-sm-12 p- " style="background-color:#b2b266;">
          <a ><img src="image/sirt.jpg" style="width:auto; height: 400px;"></a>
      </div>
    </div>
  </div>
</center>

<!-- start 2 row img women categry -->

<center>
  <div class="container-fluid" style="background-color">
    <div class="row mt-" style="height: 20%;">
      <div class="col-lg-4 col-md-12 col-sm-12 p- " style="background-color:#000000;">
          <a><img src="image/long.jpg" style="width:auto; height: 400px;"></a>
      </div>
       <div class="col-lg-8 col-md-12 col-sm-12 p-" style="background-color:#e6ccff;">
          <a><img src="image/tsirt.jpg" style="width:auto; height: 400px;"></a>
      </div>
    </div>
  </div>
</center>

<center>
  <div class="container-fluid" style="background-color">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 p-5" style="background-color:;">
          <h3>Shop New Collection</h3>
          <hr class="line">
      </div>
    </div>
  </div>
</center>

<center>
  <div class="container" style="background-color">
    <div class="row">
      <div class="col-lg-6 col-md-12 col-sm-12 " style="background-color:;">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 ">
              <img src="image/gridb1.jpg">
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 p-3">
              <img src="image/gridb2.jpg">
            </div>
          </div>
      </div>
      <div class="col-lg-6 col-md-12 col-sm-12 " style="background-color:;">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 ">
              <img src="image/grida2.jpg">
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 p-3">
              <img src="image/grida1.jpg">
            </div>
          </div>
      </div>
    </div>
  </div>
</center>

<center>
  <div class="container-fluid" style="background-color">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 p-5" style="background-color:;">
          <h3>Shop New Collection</h3>
          <hr class="line">
      </div>
    </div>
  </div>
</center>

<center>
  <div class="container-fluid" style="background-color">
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-12 " style="background-color:;">
          <img src="image/cardt1.webp"><br>
          <h6 class="mt-2 fw-bold fontprice">Skylar Distressed Mom Jeans</h6>
          <h6 class="">$ 39.99</h6>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12 " style="background-color:;">
          <img src="image/cardt2.webp">
          <h6 class="mt-2 fw-bold fontprice">Skylar Distressed Mom Jeans</h6>
          <h6 class="">$ 39.99</h6>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12 " style="background-color:;">
          <img src="image/cardt3.webp">
          <h6 class="mt-2 fw-bold fontprice">Skylar Distressed Mom Jeans</h6>
          <h6 class="">$ 39.99</h6>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12 " style="background-color:re;">
          <img src="image/cardt4.webp">
          <h6 class="mt-2 fw-bold fontprice">Skylar Distressed Mom Jeans</h6>
          <h6 class="">$ 39.99</h6>
      </div>
    </div>
  </div>
</center>

<center>
  <div class="container-fluid" style="background-color">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 p-4" style="background-color:;">
          <h6 style="letter-spacing: 2px; color:black;"><b>Trendy Clothing & Accessories at Dress Up - An Online Dress Boutique</b>
</h6>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 " style="background-color:;">
          <h6 style="font-size: 14px; color:black;"> Dress Up is a women's clothing store with new trendy and affordable arrivals dropping 2-3 times weekly. Shop the latest trends in women's fashion dresses,<br> tops, sweaters, skirts, jeans, accessories & more. At Dress Up, you can shop at one of the 16 locations across the southeast, or online 24/7 at<br> ShopDressup.com.</h6>
      </div>
    </div>
  </div>
</center>


</body>
</html>

<?php
include 'footer.php';
?>


