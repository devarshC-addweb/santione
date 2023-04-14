<?php 
ini_set("display_errors",1);
session_start();


 include 'session.php';


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <!-- This is a image of old favicon link  -->
    <!-- https://cdn-icons-png.flaticon.com/512/6365/6365967.png -->
     <link rel="shortcut icon" href="image/logo.png" type="image/x-icon">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 
  
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;1,100&display=swap" rel="stylesheet">
    <!-- link css-->
    <link rel="stylesheet" type="text/css" href="sheet/css/custom.css">
    <!-- font icon link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <style>
        div .f{
          font-family: 'Montserrat', sans-serif;
        }
        .logo{
          font-size: 40px;
        }
        .dropdown-menu{
          /*margin-right: 20px;*/
          border: none;
        }
      
    </style>
</head>
<body>
  <!-- 
  Pink color #ffc4c4 
  dark choklate burlywood
  -->
  <div class="d-flex justify-content-center bgcolor " style="background-color: #ffb3b3
;">
    <marquee style="color: black;">FREE STANDARD SHIPPING ON ORDER OVER RS.49 !!!</marquee>
    <!-- <img src="https://cdn-icons-png.flaticon.com/512/6365/6365967.png" style="width:40px;"> -->
  </div>
  <div class="d-flex justify-content-center sticky-top" style="background-color:#b9fa87; opacity: 0.9; padding: 5px;">
    <font class="logo sticky-top" style="color:black; font-size:32px;">ShantiOne</font>
    <!-- <img src="https://cdn-icons-png.flaticon.com/512/6365/6365967.png" style="width:40px; padding: 5px;"> -->
  </div>
   

  <!-- start navbar -->
  <nav class=" container-fluid navbar navbar-expand-lg navbar-light bg-ligh sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img src="image/logo.png" style="width:40px;"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link fw-bold navhvr " aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bold navhvr " href="soexclusive.php">SO Exclusive</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bold navhvr " href="clothing.php">Clothing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bold navhvr " href="shoes.php">Special Shoes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bold navhvr " href="about.php">About</a>
        </li>
      </ul>
        <div class="" >
          <form method="POST" action="search.php">
            <div class="" style="margin-right: 12px;">
              <input type="text" name="search" class="fw-bold hvr-search" placeholder="Search" required/>
              <input type="submit" class="fw-bold search-btn" value="Go" style="background-color:#b9fa87;border: none; width:40px;height: 27px; font-size: 15px;border-radius: 5px; border:1px solid black;">
            </div>
          </form> 
        </div>


        <div class="row">
          <div class="col-lg-6 col-md-12 col-sm-12" style="background-color:;">
            <li class="nav-item dropdown " style="list-style: none;">
              <a href="login.php" class="" data-bs-toggle="dropdown" aria-expanded="fals" id="navbarDropdown">
                <i class="bi bi-person-fill cart-person" style="font-size: 1.5rem; color: black;" ></i>
              </a>
                
              <ul class="dropdown-menu custom-set" aria-labelledby="navbarDropdown" style="">
                <?php 
                  if(!empty($_SESSION)){?>

                    <h3 style="font-size: 15px; font-weight: 600;" class="dropdown-item mt-2 fw-bold">Hello <?php echo $name; ?>
                    </h3>
                    <li><a class="dropdown-item" href="logout.php" style="color:red;font-weight: 600; ">Logout</a></li>
                  <?php
                  }
                  else
                  {
                    ?>
                    <li><a class="dropdown-item" href="login.php" style="color:green; font-weight: 600;">Login</a></li>
                    <?php
                  }
                ?>
                
                
                
              </ul>
            </li> 
          </div>

          <div class="col-lg-6 col-md-12 col-sm-12" style="background-color:;">
            <a href="cart.php">
              <i class="bi bi-bag-fill cart-mobile" style="font-size: 1.5rem; color:black;" ></i>
            </a>
          </div>
        </div>

        
          
          

        

        <!-- <div class="mx-3 cart-mobile">
          <a href="cart.php"><i class="bi bi-bag-fill cart-mobile" style="font-size: 1.2rem; color:black"></i></a>    
        </div> -->
      
    </div>
  </div>
</nav>
      



  


