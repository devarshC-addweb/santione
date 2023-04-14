<?php 
// Update Category...With same file not inserted on database.
include '../conn.php';

$cat_id=$_GET['cat_id'];
$q="SELECT * FROM category WHERE cat_id='$cat_id'";
$result=mysqli_query($conn,$q);
$row=mysqli_fetch_array($result);

echo $oldimg=$row['2'];

if(isset($_POST["update_category"])) 
{
    $cat_id=$_GET['cat_id'];
    $cat_name=trim($_POST['cat_name']);
    $target_dir = "image/";
    $target_file = $target_dir . basename($_FILES["cat_img"]["name"]);
    $imgupload=move_uploaded_file($_FILES["cat_img"]["tmp_name"], $target_file);
   
    if($_FILES["cat_img"]["size"]==0)
    {
        $target_file=$oldimg;
    }
    else
    {
        $target_file = "image/" . $_FILES["cat_img"]["name"];
    }

    $query="UPDATE category SET cat_name='$cat_name',cat_img='$target_file' where cat_id=$cat_id";
    $result=mysqli_query($conn,$query);
    echo $query;            
    if(!$result)
    {
        echo "not Inserted";
    }
    else
    {
        header('Location:show_category.php');
    }
}
?>
