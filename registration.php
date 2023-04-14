<?php 
include 'header.php';
?>
<title>login</title>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
<link rel="stylesheet" href="navbar_d/css/login.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
 <link rel="stylesheet" type="text/css" href="sheet/css/custom.css">
    <!-- font icon link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
<link rel="stylesheet" href="navbar_d/css/login.css">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 
<center>
    <div class="container mt-3" style="width: 40%;">
        <div class="mt-2 polaroi">
                <div class="row">
                    <div class="col-12" >
                        <h2 class="" style="color:black;">Registration</h2>
                        <form action="insert.php" method="POST">
                        <input type="text" name="fullname" placeholder="Enter Fullname" class="logininput mt-4">
                        <input type="email" name="email" placeholder="Enter Email" class="logininput mt-4" style="color:black;">
                        <input type="password" name="password" placeholder="Enter Password" class="logininput mt-4" style="color:black;">
                        <div class="row mt-4 logininput"  style="background-color:gre;">
                            <div class="col-6" >
                                <div class="">
                                    <input class="" type="radio" name="gender" value="male">
                                    <label class="form-check-label" for="flexRadioDefault1" style="color:black;">
                                        Male
                                    </label>
                                </div>
                            </div>
                            <!-- <div class="col-2">

                            </div> -->
                            <div class="col-6">
                                <div class="">
                                    <input class="" type="radio" name="gender" value="female">
                                    <label class="form-check-label" for="flexRadioDefault1" style="color:black;">
                                        FeMale
                                    </label>
                                </div>
                            </div>
                        </div>
                        <input type="number" name="mobile" placeholder="Enter Mobile" class="logininput mt-2" style="color:black;">
                        <input type="date" name="dob" placeholder="Enter username or email" class="logininput mt-4" required>
                        <br><br>
                        <font style="color: darkred;">Have an account already? </font><a style="text-decoration: none; color: royalblue;" href="login.php">Click</a> 
                        <br>
                        <input type="submit" name="registration" style="width: 300px;font-size: 20px;" class="btn mt-4 btnhvr" value="Register Me">
                         </form>
                    </div>
                </div>
        </div>
    </div>
</center>



<?php 
include 'footer.php';
?>
<!-- <title>login</title>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
<link rel="stylesheet" href="navbar_d/css/login.css">
<center>
    <div class="container mt-5" style="margin-top:50px; width: 40%;">
        <div class="mt-5 polaroi">
                <div class="row">
                    <div class="col-12" >
                        <h2 class="">Registration</h2>
                        <form action="insert.php" method="POST">
                        <input type="text" name="fullname" placeholder="Enter Fullname" class="logininput mt-4" style="width: 100%;border: 1px solid black;">
                        <input type="email" name="email" placeholder="Enter Email" class="logininput mt-4" style="width: 100%;border: 1px solid black;">
                        <input type="password" name="password" placeholder="Enter Password" class="logininput mt-4" style="width: 100%;border: 1px solid black;">
                        <div class="row mt-4" style="background-color:;">
                            <div class="col-5" style="background-color: rgb(205, 205, 248); border-radius: 50px; padding: 6px; margin-left: 55px;">
                                <div class="">
                                    <input class="" type="radio" name="gender" value="male">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Male
                                    </label>
                                </div>
                            </div>
                            
                            <div class="col-5 mx-3" style="background-color: rgb(235, 207, 235); border-radius: 50px; padding: 6px;">
                                <div class="">
                                    <input class="" type="radio" name="gender" value="female">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        FeMale
                                    </label>
                                </div>
                            </div>
                        </div>
                        <input type="number" name="mobile" placeholder="Enter Mobile"class="logininput mt-4" style="width: 100%;border: 1px solid black;">
                        <input type="date" name="dob" placeholder="Enter username or email" class="logininput mt-4" style="width: 100%;border: 1px solid black;" required>

                            
                        <font style="color: darkred;">Have an account already? </font><a style="text-decoration: none;" href="login.php">Click</a> 

                        <input type="submit" name="registration" style="width: 100%;font-size: 20px; margin-left:12px;" class="btn mt-4 btnhvr" value="Register Me">
                         </form>
                    </div>
                </div>
        </div>
    </div>
</center>
 -->

