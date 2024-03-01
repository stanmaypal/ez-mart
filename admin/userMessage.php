<?php include "folder/top.php" ?>
<div class="container">
    <div class="row">
<table class="table">
<tr>
    <th>Sr</th>
    <th>Name</th>
    <th>Email</th>
    <th>Message</th>
    <th>Response</th>
</tr>
<?php
include "config.php";
$sqlq="select * from cnt";
$send=mysqli_query($conn,$sqlq);
if(mysqli_num_rows($send))
{
    while($row=mysqli_fetch_assoc($send))
    {?>
    <tr>
<td><?php echo $row['sr'] ?></td>
<td><?php echo $row['name'] ?></td>
<td><?php echo $row['email'] ?></td>
<td><?php echo $row['message'] ?></td>
<?php

if($row['response']==0)
{?>
    <td>
        <button class="btn btn-warning">Pending</button>
    </td>
<?php
}
else {?>
   
        <td>
        <button class="btn btn-s    uccess">Done</button>
        </td>
    
<?php 
}
?>

    </tr>

  <?php 
   }

}
else{
    echo "data not found";
}
?>

</table>
    </div>
</div>

<?php include "folder/bottom.php" ?>