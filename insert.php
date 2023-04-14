<?php

include 'conn.php';

if(isset($_POST['registration']))
{
    $fullname=$_POST['fullname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $gender=$_POST['gender'];
    $mobile=$_POST['mobile'];
    $dob=$_POST['dob'];
    $date_time=date('Y-m-d h:i:sa');
    $ip_server=$_SERVER['SERVER_ADDR'];


    echo $query="INSERT INTO users (fullname,email,password,gender,mobile,dob,date_time,ip_server) VALUES ('$fullname','$email','$password','$gender','$mobile','$dob','$date_time','$ip_server')";

    $result=mysqli_query($conn,$query);


    if(!$result)
    {
        echo "insert not";
    }
    else
    {
        header('Location:login.php');
    }
}

if(isset($_POST['addcart']))
{

    // if(!$_SESSION['email'])
    // {
    //   header('Location:login.php');
    // }

    // else
    // {
        $id=$_GET['id'];

        $q="SELECT * FROM product WHERE pro_id=".$id;
        $check=mysqli_query($conn,$q);
        $row=mysqli_fetch_assoc($check);

        echo $cartimg='admin/'.$row['pro_img_1'];
        echo $cartprice=$row['pro_price'];
        echo $cartname=$row['pro_name'];
        $date_time=date('Y-m-d h:i:sa');
        $ip_server=$_SERVER['SERVER_ADDR'];
        
        echo $query="INSERT INTO cart (pro_id,cart_pro_img,cart_pro_price,car_prot_name,date_time,ip_server) VALUES ($id,'$cartimg','$cartprice','$cartname','$date_time','$ip_server')";

        $result=mysqli_query($conn,$query);


        if(!$result)
        {
            echo "insert not";
        }
        else
        {
           header('Location:cart.php'); 

        }
    // }
}

?>