<?php 

include '../conn.php';

//Add Category...With same file not inserted on database.

if(isset($_POST["add_category"])) 
{
   	$cat_name=trim($_POST['cat_name']);
    $target_dir = "image/";
	$target_file = $target_dir . basename($_FILES["cat_img"]["name"]);
	$uploadOk = 1;
    
    if(file_exists($target_file)) 
    {        
    	// Check if file already exists
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    else  
    {   
    	// if everything is ok, try to upload file 
    	if (move_uploaded_file($_FILES["cat_img"]["tmp_name"], $target_file)) 
    	{

    		echo $query="INSERT INTO category (cat_name,cat_img) VALUES ('$cat_name','$target_file')";
			$result=mysqli_query($conn,$query);
			if(!$result)
			{
				echo "not Inserted";
			}
			else
			{
				echo "The file ". basename( $_FILES["cat_img"]["name"]). " has been uploaded.";
				header('Location:show_category.php');
			}
        } 
      	else 
      	{
        	echo "Sorry, there was an error uploading your file.";
        }
	}
}

//sub_category insert code start here.............

if(isset($_POST["add_sub_category"])) 
{
   	$cat_name=trim($_POST['cat_name']);
   	$sub_category_name=trim($_POST['sub_category_name']);

    $target_dir = "image/";
	$target_file = $target_dir . basename($_FILES["sub_cat_img"]["name"]);
	$uploadOk = 1;
    
    if(file_exists($target_file)) 
    {        
    	// Check if file already exists
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    else  
    {   
    	// if everything is ok, try to upload file 
    	if (move_uploaded_file($_FILES["sub_cat_img"]["tmp_name"], $target_file)) 
    	{

    		echo $query="INSERT INTO sub_category (cat_name,sub_cat_name,sub_cat_img) VALUES ('$cat_name','$sub_category_name','$target_file')";
			$result=mysqli_query($conn,$query);
			if(!$result)
			{
				echo "not Inserted";
			}
			else
			{
				echo "The file ". basename( $_FILES["sub_cat_img"]["name"]). " has been uploaded.";
				header('Location:show_sub_category.php');
			}
        } 
      	else 
      	{
        	echo "Sorry, there was an error uploading your file.";
        }
	}
}

// Insert Product ......

if(isset($_POST["add_product"])) 
{
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
	$uploadOk = 1;

	$target_dir2 = "image/";
	$target_file2 = $target_dir2 . basename($_FILES["pro_img_2"]["name"]);
	$uploadOk = 1;
    
    $target_dir3= "image/";
	$target_file3 = $target_dir3. basename($_FILES["pro_img_3"]["name"]);
	$uploadOk = 1;

    // if(($img1=file_exists($target_file1)) AND
    //    ($img2=file_exists($target_file2)) AND 
    //    ($img3=file_exists($target_file3)))
    // {        
    // 	//Check if file already exists
    // 	echo "Sorry,The Image 1 already exists"."<br>";
    // 	echo "Sorry,The Image 2 already exists"."<br>";
    // 	echo "Sorry,The Image 3 already exists"."<br>";
        
    //     $uploadOk = 0;
    //     // echo "nnn";
    // }
    // else  
    //{   
    	// if everything is ok, try to upload file 
    	if ($i1=move_uploaded_file($_FILES["pro_img_1"]["tmp_name"], $target_file1) AND 
    		$i2=move_uploaded_file($_FILES["pro_img_2"]["tmp_name"], $target_file2) AND 
    		$i3=move_uploaded_file($_FILES["pro_img_3"]["tmp_name"], $target_file3)) 
    	{

    		$query="INSERT INTO product 
    		(cat_name,sub_cat_name,pro_name,pro_price,pro_img_1,pro_img_2,pro_img_3,pro_description,in_active,date_time,ip_server) VALUES 
    		('$cat_name','$sub_cat_name','$pro_name','$pro_price','$target_file1','$target_file2','$target_file3','$pro_description','$in_active','$date_time','$ip_server')";

    		 echo $query;

			$result=mysqli_query($conn,$query);

			if(!$result)
			{
				echo "not Inserted";
			}
			else
			{
				echo "The Image 1 has been uploaded."."<br>";
				echo "The Image 2 has been uploaded."."<br>";
				echo "The Image 3 has been uploaded."."<br>";
				header('Location:show_product.php');
			}
        } 
      	else 
      	{
        	echo "Sorry, there was an error uploading your file.";
        }
	}




