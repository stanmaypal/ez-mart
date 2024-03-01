<?php
// print_r($_POST);
// print_r($_FILES);
if(isset($_POST['submit']))
{
    include "config.php";
    $status=1;
    $name=$_POST['pname'];
    $pr=$_POST['pr'];
    $txt=$_POST['txt'];
    $cate=$_POST['cate'];
    $dis=$_POST['dis'];
    $id=$_POST['upi1'];
    $img=$_FILES['img5']['name'];
    $temp_img=$_FILES['img5']['tmp_name'];
    $folder="img/$img";
    if(!$img)
    {
        //echo "error";
        $sql="update product set name='$name',price='$pr',cate='$cate',dis='$dis'
    ,details='$txt' where p_id='$id'";
            // echo $sql;
            // die();

     $result=mysqli_query($conn,$sql);
        if($result)
        {
            echo "data inserted";
        }
        else{
            echo "error";
        }
}
    else{
       move_uploaded_file($temp_img,$folder);
    //    $sql="insert into product (name,price,cate,dis,p_status,image)
    //    values('$name','$pr','$cate','$dis',$status,'$img')";
       $sql="update product set name='$name',price='$pr',cate='$cate',dis='$dis'
        ,image='$img',details='$txt' where p_id='$id'";
    //    echo $sql;
    //    die();
        $result=mysqli_query($conn,$sql);
        if($result)
        {
            echo "data inserted";
        }
        else{
            echo "error";
        }


    }
//setcookie("Name",$name);
    
}
?>