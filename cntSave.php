<?php
//print_r($_POST);
if(isset($_POST['send']))
{
    include "admin/config.php";
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mes=$_POST['message'];
    if($name==null && $email==null&& $mes==null)
    {
        echo "error";
    }
    else{
       
        $sqlCnt="insert into cnt(name,email,message,response)
        values('$name','$email','$mes','0')
        "; 
        
        $send=mysqli_query($conn,$sqlCnt);
        if(!$send)
        {
            echo "Error not inserted";
        }
        else{
            echo "done";
        }

       }
}
?>