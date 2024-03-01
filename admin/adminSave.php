<?php
//print_r($_POST);

include "config.php";
if(isset($_POST['user'])&& isset($_POST['pass']))
{
    $user=$_POST['user'];
    $pass=$_POST['pass'];
    //$epass=md5($pass);
    $sqlLog="select * from admin where email='$user'";
    $result=mysqli_query($conn,$sqlLog);
    if(mysqli_num_rows($result))
    {
        while($row=mysqli_fetch_assoc($result))
        {

            if($pass==$row['pass'])
            {
                session_start();
                $_SESSION['user']=$row['email'];
                //echo "log in success";
                header("Location:dashboard.php");
            }
            else{
                //echo "invalid id and password";
                header("Location:../index.php");

            }
        }
    }
    else{
       // echo "invalid Id and Password";
        header("Location:../index.php");

    }

}
?>