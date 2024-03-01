<?php
include "header/header.php";
?>
<div class="container">
    <div class="row">
        <p class="h1 text-center text-danger">About Us</p>

        <?php
        include "admin/config.php";
      
        $sqlAbout="select * from abt";
        
        $result=mysqli_query($conn,$sqlAbout);
        if(mysqli_num_rows($result))
        {
            while($row=mysqli_fetch_assoc($result))
            {?>
<p>
    <?php echo $row['txt'] ?>
</p>
           <?php
            }
            
        }
        else
        {
            echo "data not found ";
        }
        ?>
    </div>
</div>