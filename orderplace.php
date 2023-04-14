<?php 
include 'header.php';
include 'conn.php';
$id=$_GET['id'];

$q="SELECT * FROM product WHERE pro_id=".$id;
$check=mysqli_query($conn,$q);
$row=mysqli_fetch_assoc($check);

$pro_name = $row['pro_name'];
$pro_price = $row['pro_price'];
$shipping_price = "40.00";
$tax_price = "22.00";
$total_price = $pro_price + $shipping_price + $tax_price; 
?>

<center>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 " style="background-color:;">
          <h3 style="color:;">Order Place</h3>
          <hr class="line">
      </div>
    </div>
  </div>
</center>

<div class="container"  style="background-color:#ebe9e4;">
    <form action="pay.php?id=<?php echo $row['pro_id']; ?>" method="get">
        <div class="px-4 py-5">
        <h5 class="text-uppercase">Hello,  Jonathan Adler</h5>
        <h4 class="mt-5 theme-color mb-3">Payment Summary</h4>

        <!-- <span class="theme-color mt-5">Payment Summary</span> -->
        
        <div class="mb-3">
            <hr class="new1">
        </div>

        <div class="d-flex justify-content-between">
            <input type="hidden" name="product_name" value="<?php echo $pro_name; ?>">
             <input type="hidden" name="product_price" value="<?php echo $pro_price; ?>">
            <span class="font-weight-bold proname mt-1 fw-bold"><?php echo $pro_name; ?></span>
            <span class=" font-weight-bold proname mt-1 fw-bold"><?php echo $pro_price ?></span>
        </div>

        <div class="d-flex justify-content-between">
            <small class="font-weight-bold proname mt-1 fw-bold">Shipping</small>
            <small class="proname mt-1 fw-bold"><?php echo $shipping_price; ?></small>
        </div>


        <div class="d-flex justify-content-between">
            <small class="proname mt-1 fw-bold">Tax</small>
            <small class="proname mt-1 fw-bold"><?php echo $tax_price; ?></small>
        </div>

        <div>
            <hr class="new1">
        </div>

        <div class="d-flex justify-content-between mt-2">
            <span class="font-weight-bold proname mt-1 fw-bold">Total</span>
            <span class="font-weight-bold proname fw-bold text-primary"><?php echo $total_price; ?></span>
        </div>

        <div class="form-group mt-5">
            <label for="exampleInputEmail1" class="proname mt-1 fw-bold">Name:</label>
            <input type="name" name="name" placeholder="Enter Name" class="form-control mt-2" style="border: color: black;">
        </div>
    <!-- 
            <div class="form-group">
                <label for="exampleInputEmail1" class="proname mt-2 fw-bold">Email:</label>
                <input type="email" name="email" placeholder="Enter Email" class="form-control mt-2" style="border: color: black;">
            </div> -->

        <!-- <div class="form-group">
            <label for="exampleInputEmail1" class="proname mt-2 fw-bold">Mobile:</label>
            <input type="text" name="mobile" placeholder="Enter Mobile" class="form-control mt-2" style="border: color: black;">
        </div>
             -->
        <div class="text-center mt-5">
            <input type="submit" name="pay_now" class="btn w-50 btn-orderplace" value="Confirm Order" style="background:#ebe9e4;">
            <!-- <button class="btn btn-primary">Track your order</button> -->
        </div>                   
    </div>
    </form>
</div>

<?php 
include 'footer.php';
?>
