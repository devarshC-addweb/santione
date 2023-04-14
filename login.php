<?php 
session_start();
// include 'header.php';
include 'conn.php';
?>
<title>login</title>
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
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
 <link rel="stylesheet" type="text/css" href="sheet/css/custom.css">
    <!-- font icon link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
<link rel="stylesheet" href="navbar_d/css/login.css">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 
<center>
    <div class="container mt-3" style="margin-top:50px;">
        <div class="mt-2 ">
          <form method="POST" action="login.php">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                      <h3 class="">Log In</h3>
                          <input type="text" name="email" placeholder="Enter username or email" class="logininput mt-4" style="width: 300px;border: 1px solid black;"><br>
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                      <input type="password" name="password" placeholder="Enter Password" class="logininput mt-4" style="border: 1px solid black; color: black;">
                  </div>
                </div>

                 <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 mt-4 mx-4">
                      <font style="color:black;">Don't have an account? </font>
                      <a style="text-decoration: none; color: royalblue;" href="registration.php">Click</a>
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 mx-2">
                      <input type="submit" style="width: 300px;font-size: 20px;" class="btn mt-4 btnhvr" value="Login" name="login">
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
    </div>
</center>

<?php 
if(isset($_POST['login']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];

    echo $query="SELECT email,password FROM users WHERE email='$email' AND password='$password' ";
    $result=mysqli_query($conn,$query);
    $row=mysqli_num_rows($result);
    if($row > 0)
    {   
       echo $_SESSION['email'] = $email; 
        header('Location:index.php');
        // echo "hello";
    }
    else
    {
        echo "<center><b>Password Are Wrong... <br>Please Try Again</b></center>";
    }

}
?>
<?php 
include 'footer.php';
?>