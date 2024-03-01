<?php
include "header/header.php"
?>
    <!-- slideBar start here -->
    <div class="container-fluid my-1">
        <div class="row">
            
<div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="image/s1.jpeg" class="d-block w-100" alt="Slide 1">
        </div>
        <div class="carousel-item">
            <img src="image/s2.jpeg" class="d-block w-100" alt="Slide 2">
        </div>
        <div class="carousel-item">
            <img src="image/s3.jpeg" class="d-block w-100" alt="Slide 3">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
        </div>
    </div>

    <!-- product Session Start here -->
    <div class="container">
        <div class="row">
            <p class="h2 text-danger text-center">New Products</p>
          
<?php
$n1=1;
include "./admin/config.php";
$sqlAll="select * from product";
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
                            <img src="admin/img/<?php echo $row['image']?>" class="d-block w-100" height="300px" alt="Product Iamge">
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


            <!-- <div class="col-lg-3 col-sm-12 col-md-3">2</div>
            <div class="col-lg-3 col-sm-12 col-md-3">3</div>
            <div class="col-lg-3 col-sm-12 col-md-3">4</div> -->
        </div>
    </div>
    <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">User Sign Up</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="signUpUser.php" method="post" enctype="multipart/form-data" class="form">
            <input type="text" class="form-control my-2" name="name" placeholder="Name">
            <input type="text" class="form-control my-2" name="mobile" placeholder="Mobile">
            <input type="email" class="form-control my-2" name="email" placeholder="Email">
            <input type="text" class="form-control my-2" name="user" placeholder="userId">
            <input type="password" class="form-control my-2" name="pass" placeholder="password">
            <input type="password" class="form-control my-2" name="cpass" placeholder="Confirm password">
            <input type="text" class="form-control my-2" name="pin" placeholder="pinCode">
            <input type="file" class="form-control my-2" name="img3" >
            <textarea class="form-control"placeholder="Address" name="address"></textarea>
            <button class="btn btn-success" name="sign">SignUP</button>
        </form>
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>
<!-- Log IN  Modal -->
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Log In</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="userLog.php" method="post">
            <input type="text" name="user"  class="form-control my-2" id="" placeholder="UserId">
            <input type="password" class="form-control my-2" name="pass" id="" placeholder="Password">
            <button class="btn btn-success"name="log">Log In</button>
        </form>
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>
<?php include "footer/footer.php"?>
</body>
</html>
