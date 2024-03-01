<?php
//print_r($_POST);
if(isset($_POST['btn']))
{
    include "config.php";
    $data=$_POST['txt'];
    $sqlAbout="insert into abt (txt) value('$data')";
    // echo $sqlAbout;
    // die();
    $result=mysqli_query($conn,$sqlAbout);
    if(!$result)
    {
        echo "data not inserted ";
    }
    else
    {
        echo "done";  
    }
}
?>