<?php 
include 'header.php';
include 'conn.php';
?>


<center>
  <div class="container" style="background-color:;">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 " style="background-color:;">
          <h3 style="color:;">Santi One Exclusive</h3>
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
    $query="SELECT * from `product` order by rand()";
    //s$query="SELECT * FROM product WHERE cat_name='women' AND sub_cat_name='sirt' LIMIT 4;";  
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


<!-- SELECT pro_id,pro_img_1 from `product` order by rand() -->

<?php 
include 'footer.php';
?>