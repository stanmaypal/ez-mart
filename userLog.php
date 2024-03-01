<?php
//print_r($_POST);

include "admin/config.php";
if(isset($_POST['user'])&& isset($_POST['pass']))
{
    $user=$_POST['user'];
    $pass=$_POST['pass'];
    $epass=md5($pass);
    $sqlLog="select * from userData where userId='$user'";
    $result=mysqli_query($conn,$sqlLog);
    if(mysqli_num_rows($result))
    {
        while($row=mysqli_fetch_assoc($result))
        {

            if($epass==$row['pass'])
            {
                session_start();
                $_SESSION['account']=$row['name'];
                echo "log in success";
                header("Location:index.php");
            }
            else{
                echo "invalid id and password";
            }
        }

    }
    else{
        echo "invalid Id and Password";
    }

}
?>