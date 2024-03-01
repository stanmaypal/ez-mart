<?php
include "header/header.php";
include "admin/config.php";
if(isset($_GET['pid']))
{
    $id=$_GET['pid'];
    echo $id;
    $sql="select * from categories where c_id='$id'";
    $cres=mysqli_query($conn,$sql);
    if(mysqli_num_rows($cres))
    {
        while($data=mysqli_fetch_assoc($cres))
        {?>

            <p class="h1 text-danger text-center"><?php echo $data['name']?></p>

        <?php
        
    }
    }

    
}
?>
<!-- product Session Start here -->
<div class="container">
        <div class="row">
          
<?php
$n1=1;
include "./admin/config.php";
$sqlAll="select * from product where cate='$id'";
$result =mysqli_query($conn,$sqlAll);
if(mysqli_num_rows($result))
{
    while($row=mysqli_fetch_assoc($result))
    {
        $reP=$row['price'];
        $reDis=$row['dis'];
        $price= $reP-($reP*$reDis/100);
         ?>
      <div class="col-lg-3 col-sm-12 col-6 my-2">
                    <div class="card">
                        <div>
                            <span><?php echo $row['dis']?> % Off</span>
                            <img src="admin/img/<?php echo $row['image']?>" height="300px" class="d-block w-100" alt="Product Iamge">
                        </div>
                        <p class="text-center text-danger h3"><?php echo $row['name']?></p>
                        <?php
                        if($row['p_status']!=1)
                        {?>
                        <p class="bg-warning text-danger text-center py-2" >OUt Of Stack</p>
                    <button class="btn btn-success h4">Notify Me</button>


                       <?php }
                       else{?>
                     <div>
                        <span class="float-start h5 text-danger"><del>₹<?php echo $row['price']?></del></span>
                    <span class="float-end h5 text-info">₹<?php echo $price?></span>
                    </div>
                    <div>
                        <a href="fullProduct.php?pid=<?php echo $row['p_id']?>" class="btn btn-warning float-start h5 ">Add To Cart</a>
                    <button class="btn btn-success float-end h4">Buy Now</button>
                    </div>
                       <?php
                       }
                        ?>
                   
                    </div>
                </div>
    
    <?php
        $n1++;
    }
    

}
else{
    echo "data not found";
}


?>


           
        </div>
    </div>