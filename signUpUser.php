<?php
//print_r($_POST);
//print_r($_FILES);
if(isset($_POST['sign']))
{
    include "admin/config.php";
    $pass=$_POST['pass'];
    $cpass=$_POST['cpass'];

    if($pass===$cpass)
    {
        $name=$_POST['name'];
        $mobile=$_POST['mobile'];
        $email=$_POST['email'];
        $address=$_POST['address'];
        $pin=$_POST['pin'];
        $user=$_POST['user'];
        $img=$_FILES['img3']['name'];

        $temp_img=$_FILES['img3']['tmp_name'];
       // $picType=$_FILES['img3']['type']; 
        //$picType1= strtolower($img,PATHINFO_EXTENSION);
        $picType= strtolower(pathinfo($img,PATHINFO_EXTENSION)); 

       echo $picType;
        $newPass=md5($pass);

        if($picType !="png" && $picType!="jpg" && $picType!="jpeg")
        {
            echo"Invalid image formate";
        }
        else{
            echo"Done";


            $folder="image/$img";
            move_uploaded_file($temp_img,$folder);
            $sql = "INSERT INTO `userdata`( `name`, `mobile`, `email`, `userId`, `pass`, `pin`, `image`, `address`)
             VALUES ('$name','$mobile','$email','$user','$newPass',
             '$pin','$img','$address');";
                //  echo $sql;
                //  die();
            $result= mysqli_query($conn,$sql);
            if($result)
            {
                echo"sing up successfull";
            }
            else{
                echo "failled";
            }
        }
        //die();
        // echo $pass;
        // echo"<br>";
        // echo $newPass;

        // die();  




    }
    else{
        echo "Password not Matched";

    }
}
?>