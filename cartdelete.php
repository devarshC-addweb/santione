<?php 
include 'conn.php';

$id=$_GET['id'];

echo $q="DELETE FROM `cart` WHERE cart_id=".$id;
$check=mysqli_query($conn,$q);

header('Location:cart.php');

?>