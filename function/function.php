<?php 

// function conn()
// {
//     $conn=mysqli_connect("localhost","root","","ecommerce");
// }

function InsertInTable($table,&$fields)
{
    $col = "insert into $table (`".implode("` , `",array_keys($fields))."`)";
    $val = " values('";    

    foreach($fields as $key => $value) 
    {
        $fields[$key] = mysqli_escape_string($value);
    }
    $val .= implode("' , '",array_values($fields))."');";      
    $fields = array();
    return;
}


?>