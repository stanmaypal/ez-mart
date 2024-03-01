
  <?php include "folder/top.php"?>
    <div class="container">
        <div class="row">
            <button  data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-success">Add Product</button>
            <table class="table">
                <tr>
                    <th>Sr</th>
                    <th>ProductName</th>
                    <th>Price</th>
                    <th>Categorise</th>
                    <th>Discount</th>
                    <th>Action</th>
                    <th>Update</th>
                    <th>Image</th>


                </tr>
                <?php
                include "config.php";
                $sql="select * from product";
                $result =mysqli_query($conn,$sql);
                if(mysqli_num_rows($result))
                {
                  $n=1;
                  while($row=mysqli_fetch_assoc($result))
                  {?>
                  <tr>
                    <td><?php echo $n?></td>
                    <td><?php echo $row['name']?></td>
                    <td><?php echo $row['price']?></td>
                    <td><?php echo $row['cate']?></td>
                    <td><?php echo $row['dis']?></td>
                    <td><?php
                     
                     if($row['p_status']!=1)
                     {?>
                        <a class="btn btn-danger"href="active.php?act=<?php echo $row['p_id'];?>">Dective</a>
                    <?php }
                     else{?>
                        <a class="btn btn-success" href="deactive.php?act=<?php echo $row['p_id'];?>">Active</a>

                    <?php }
?>
                  </td>
                  <td><a class="btn btn-warning"href="addProductDetails.php?upi=<?php echo $row['p_id'];?>">Update</a></td>

                    <td><img width="20%" src="img/<?php echo $row['image']?>"></td>


                  </tr>

                 <?php
                 $n++;
                  }

                }
                else{
                  echo "data not found";
                }
                ?>
            </table>
        </div>
    </div>
    

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form Action="saveProduct.php" method="post" enctype="multipart/form-data">
            <input type="text" class="form-control my-2" name="pname" placeholder="ProductName">
            <input type="text" class="form-control my-2" name="pr" placeholder="Price">
            <!-- call dropDown  -->
            <select class="form-select" name="cate">
                <option>--Select--</option>
                <?php
                include "config.php";
                $sql="select * from categories";
                $result=mysqli_query($conn,$sql);
                if(mysqli_num_rows($result))
                {
                    while($row=mysqli_fetch_assoc($result))
                    {?>
                      
                      <option value="<?php echo $row['c_id']?>"><?php echo $row['name']?></option>
                    <?php
                    }


                }
                else
                {
                    echo "Data not found";
                }
                ?>
            </select>
            <!-- call dropDown  -->
            <input type="text" class="form-control my-2" name="dis" placeholder="Discount %">
            <input type="file" class="form-control my-2" name="img5" placeholder="Image">
            <button class="btn btn-success" name="submit">Add Product</button>
        </form>
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>
<?php include "folder/bottom.php"?>
<!-- </body>
</html> -->