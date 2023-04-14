<?php 
include '../conn.php';

$pro_id=$_GET['pro_id'];
$q="SELECT * FROM product WHERE pro_id='$pro_id'";
$result=mysqli_query($conn,$q);
$row=mysqli_fetch_array($result);

echo $oldimg1=$row['5'];
echo "<br>";
echo $oldimg2=$row['6'];
echo "<br>";
echo $oldimg3=$row['7'];
echo "<br>";

// Insert Product ......

if(isset($_POST["update_product"])) 
{
    $pro_id=$_GET['pro_id'];
   	$cat_name=trim($_POST['cat_name']);
   	$sub_cat_name=trim($_POST['sub_cat_name']);
   	$pro_name=trim($_POST['pro_name']);
   	$pro_price=trim($_POST['pro_price']);
   	$pro_description=trim($_POST['pro_description']);
   	$in_active=trim($_POST['in_active']);
   	$date_time=date('Y-m-d h:i:sa');
    $ip_server=$_SERVER['SERVER_ADDR'];

   //insert first image from product table

    $target_dir1 = "image/";
	$target_file1 = $target_dir1 . basename($_FILES["pro_img_1"]["name"]);
	// $uploadOk = 1;
    $imgupload1=move_uploaded_file($_FILES["pro_img_1"]["tmp_name"], $target_file1);

	if($_FILES["pro_img_1"]["size"]==0)
    {
        $target_file1=$oldimg1;
    }
    else
    {
        $target_file1 = "image/" . $_FILES["pro_img_1"]["name"];
    }

	
    //second image change

    $target_dir2 = "image/";
    $target_file2 = $target_dir2 . basename($_FILES["pro_img_2"]["name"]);
    // $uploadOk = 1;
    $imgupload2=move_uploaded_file($_FILES["pro_img_2"]["tmp_name"], $target_file2);

    if($_FILES["pro_img_2"]["size"]==0)
    {
        $target_file2=$oldimg2;
    }
    else
    {
        $target_file2 = "image/" . $_FILES["pro_img_2"]["name"];
    }

    //second image change

    $target_dir3 = "image/";
    $target_file3 = $target_dir3 . basename($_FILES["pro_img_3"]["name"]);
    // $uploadOk = 1;
    $imgupload3=move_uploaded_file($_FILES["pro_img_3"]["tmp_name"], $target_file3);

    if($_FILES["pro_img_3"]["size"]==0)
    {
        $target_file3=$oldimg3;
    }
    else
    {
        $target_file3 = "image/" . $_FILES["pro_img_3"]["name"];
    }

    $query="UPDATE product SET cat_name='$cat_name',sub_cat_name='$sub_cat_name',pro_name='$pro_name',pro_price='$pro_price',pro_img_1='$target_file1',pro_img_2='$target_file2',pro_img_3='$target_file3',pro_description='$pro_description',in_active='$in_active',date_time='$date_time',ip_server='$ip_server' WHERE pro_id=$pro_id";
    $result=mysqli_query($conn,$query);
    echo $query; 
//,pro_img_2='target_file2',pro_img_3='target_file3'
    if(!$result)
    {
        echo "not Inserted";
    }
    else
    {
    	echo "<br>";
    	echo "done";
        header('Location:show_product.php');
    }
}

?>