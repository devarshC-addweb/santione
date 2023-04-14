<?php 
include 'conn.php';
// include '';
?>

     <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/6365/6365967.png" type="image/x-icon">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;1,100&display=swap" rel="stylesheet">
    <!-- link css-->
    <link rel="stylesheet" type="text/css" href="sheet/css/custom.css">
    <!-- font icon link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <style>
        div .f{
            font-family: 'Montserrat', sans-serif;
        }
        .logo{
          font-size: 40px;
        }
        .dropdown-menu{
          margin-right: 20px;
          border: none;
        }
      
    </style>
<!-- start navbar -->
  <nav class=" container-fluid navbar navbar-expand-lg navbar-light bg-ligh sticky-top">
  <div class="container-fluid">
    <!-- <a class="navbar-brand" href="index.php"><img src="https://cdn-icons-png.flaticon.com/512/6365/6365967.png" style="width:40px;"></a> -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <!--   <li class="nav-item">
          <a class="nav-link fw-bold navhvr f" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bold navhvr f" href="soexclusive.php">SO Exclusive</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bold navhvr f" href="clothing.php">Clothing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bold navhvr f" href="shoes.php">Special Shoes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bold navhvr f" href="about.php">About</a>
        </li> -->
      </ul>

        <li class="nav-item dropdown"style="margin-right: 20px;">
          <a href="login.php" class="" data-bs-toggle="dropdown" aria-expanded="fals" id="navbarDropdown">
            <i class="bi bi-person-fill" style="font-size: 1.5rem; color: black;" ></i>
          </a>
            
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <h3 style="font-size:10px; font-size: 15px;" class="mt-2 fw-bold p-2">Hello <?php echo $row['fullname']; ?></h3>
            <a href="login.php" style="color:green; text-decoration: none;" class="p-2">Login</a>
           <a href="logout.php" style="color:red; text-decoration: none;" class="p-2">Logout</a>
          </ul>
        </li> 
        <div class="mx-3" >
          <a href="cart.php"><i class="bi bi-bag-fill" style="font-size: 1.2rem; color:black"></i></a>    
        </div>
      <!-- <div class="mx-3">
        <a href="login.php"><i class="bi bi-person-fill " style="font-size: 1.5rem; color: black;"></i></a>
      </div> -->

      <!-- <div class="d-flex justify-content-right sticky-top" style="background-color:; opacity:"> -->
        <!-- <h3 style="font-size:10px; font-size: 18px;" class="mt-2 fw-bold">Hello <?php //echo $row['fullname']; ?></h3> -->
      <!-- </div> -->

    </div>
  </div>
</nav>
</body>
</html>