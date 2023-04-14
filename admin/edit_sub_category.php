<?php 
// Update Sub Category...With same file not inserted on database.
include '../conn.php';

$sub_cat_id=$_GET['sub_cat_id'];
$q="SELECT * FROM sub_category WHERE sub_cat_id='$sub_cat_id'";
$result=mysqli_query($conn,$q);
$row=mysqli_fetch_array($result);

echo $oldimg=$row['3'];
echo "<br>";

if(isset($_POST["update_sub_category"])) 
{
    $sub_cat_id=$_GET['sub_cat_id'];
    $cat_name=trim($_POST['cat_name']);
    $sub_cat_name=trim($_POST['sub_cat_name']);
    $target_dir = "image/";
    $target_file = $target_dir . basename($_FILES["sub_cat_img"]["name"]);
    $imgupload=move_uploaded_file($_FILES["sub_cat_img"]["tmp_name"], $target_file);
   
    if($_FILES["sub_cat_img"]["size"]==0)
    {
        $target_file=$oldimg;
    }
    else
    {
        $target_file = "image/" . $_FILES["sub_cat_img"]["name"];
    }

    $query="UPDATE sub_category SET cat_name='$cat_name',sub_cat_name='$sub_cat_name',sub_cat_img='$target_file' where sub_cat_id=$sub_cat_id";
    $result=mysqli_query($conn,$query);
    echo $query;            
    if(!$result)
    {
        echo "not Inserted";
    }
    else
    {
        echo "ok";
        header('Location:show_category.php');
    }
}
?>
