<?php
include "folder/top.php";
//print_r($_GET);
if(isset($_GET['upi']))
{
    include "config.php";
    $id=$_GET['upi'];

    $sql="select * from product where p_id='$id'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result))
    {
        while($row1=mysqli_fetch_assoc($result))
        {
            ?>
 <form Action="saveProductUP.php"  method="post" enctype="multipart/form-data">
 <input type="text" hidden class="form-control my-2" name="upi1" value="<?php echo $row1['p_id'] ?>" placeholder="ProductName">

            <input title="Dmeo Name" type="text" class="form-control my-2" name="pname" value="<?php echo $row1['name'] ?>" placeholder="ProductName">
            <input type="text" class="form-control my-2" name="pr"value="<?php echo $row1['price'] ?>"  placeholder="Price">
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
            <input type="text" class="form-control my-2" name="dis" value="<?php echo $row1['dis']?>" placeholder="Discount %">
            <input type="file" class="form-control my-2" name="img5" placeholder="Image">
            <div>
                <img width=" 20%" src="img/<?php echo $row1  ['image']?>">
            </div>
            <textarea class="tinymce-editor" name="txt"></textarea>
            <button class="btn btn-success" name="submit">Update Product</button>
        </form>

        <?php
        }

    }
    else{
        echo "Data not found";
    }
}
?>