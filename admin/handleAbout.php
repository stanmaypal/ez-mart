<?php include "folder/top.php"?>
<div class="container">
    <div class="row">
        <p class="text-center h1 text-danger">About Handle</p>
    </div>
</div>
<div class="container">
    <div class="row">
       <form action="handleAboutSave.php" method="post" encytype="multipart/form-data">
        <textarea name="txt" class="form-control"></textarea>
        <button name="btn" class="btn btn-success my-2">Save Data</button>
       </form>
    </div>
</div>
<?php include "folder/bottom.php"?>