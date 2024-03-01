<?php
 if(isset($_GET['act']))
 {
    include "config.php";
    $id=$_GET['act'];
    $actSql="UPDATE product SET p_status = '0' WHERE p_id = '$id'";
    // echo $actSql;
    // die();
    $data=mysqli_query($conn,$actSql);
    if($data)
    {
        header('Location:productManage.php');
    }
    else{
        echo "error";
    }
 
 }
?>