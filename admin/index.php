<!-- <title>Admin login</title> -->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
<link rel="stylesheet" href="../navbar_d/css/login.css">
<div class="container">
    <div class="row mt-4">
        <div class="col-12">
            Hello Admin
        </div>
    </div>
</div>
<center>
    <form action="#" method="POST">
        <div class="container mt-5" style="margin-top:50px;">
            <div class="mt-5 polaroid sticky-sm-top">
                <form action="#" method="POST">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="">Admin Login</h2>
                            <input type="text" name="shopname" placeholder="Enter shopname" class="form-control mt-4">
                            <input type="text" name="password" placeholder="Enter Password" class="form-control mt-4"> 
                            <input type="submit" style="width: 100%;font-size: 20px;" class="btn mt-4 btnhvr" value="Login" name="login">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </form>
</center>

<?php 
if(isset($_POST['login']))
{
    session_start();
    $shopname=$_POST['shopname'];
    $password=$_POST['password'];

    include '../conn.php';

    $query="SELECT shop_name,email,password FROM admin WHERE shop_name='$shopname' AND password='$password' ";
    $result=mysqli_query($conn,$query);
    $row=mysqli_num_rows($result);

    if($row > 0)
    {   
        $_SESSION['shopname'] = $shopname;
        header('location:dashboard.php');
        // echo "dd";
    }
    else
    {
        echo "<center><b>Password Are Wrong... <br>Please Try Again</b></center>";
    }

}
?>


