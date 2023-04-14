<?php 

include '../conn.php';

@$cat_id=$_GET['cat_id'];
echo "<br>";
echo $q="DELETE FROM category WHERE cat_id=$cat_id";
$result=mysqli_query($conn,$q);
//$row1=mysqli_fetch_assoc($result);

$sub_cat_id=$_GET['sub_cat_id'];
echo "<br>";
echo $q2="DELETE FROM sub_category WHERE sub_cat_id=$sub_cat_id";
$result2=mysqli_query($conn,$q2);


$pro_id=$_GET['pro_id'];
echo "<br>";
echo $q3="DELETE FROM product WHERE pro_id=$pro_id";
$result3=mysqli_query($conn,$q3);


if($result)
{
	echo "category record deleted";
	header('Location:show_category.php');
}
else if($result2)
{
	echo "sub category record deleted";
	header('Location:show_sub_category.php');
}
else if($result3)
{
	echo "product record deleted";
	header('Location:show_product.php');
}
else
{
	echo "some proble ";
}







?>