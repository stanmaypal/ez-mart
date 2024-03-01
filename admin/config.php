<?php
$host="localhost";
$user="root";
$pass="";
$db="ezmart";
$conn=mysqli_connect($host,$user,$pass,$db);
if(!$conn)
{
    echo "databse not connected";
}
?>