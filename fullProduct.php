<?php
include "header/header.php";
include "admin/config.php";
//print_r($_GET);
?>
<div class="container">
    <div class="row">
        <?php
        if(isset($_GET['pid']))
        {
            $id=$_GET['pid'];
            $sql="Select * from product where p_id='$id'";
            $result=mysqli_query($conn,$sql);
            if(mysqli_num_rows($result))
            {
                while($data=mysqli_fetch_assoc($result))
                {?>
                    <div class="col-lg-1"></div>
                    <div class="col-lg-5">
                       <img class="d-block w-100" src="admin/img/<?php echo $data['image']?>">
                    <a class="btn btn-success my-2">Buy Now</a>
                    <p class="h5 text-danger">
                        <?php echo $data['price']?>
                    </p>
                    </div>
                    <div class="col-lg-6">
                    <?php echo $data['details'] ?>
                    </div>

               <?php }

            }
            else{
                echo "data not found";
            }
        }
        ?>
       
    </div>
</div>