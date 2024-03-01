
<?php
session_start(); // Start session

// Check if 'account' key is set in $_SESSION
if(isset($_SESSION['account'])) {
    $username = $_SESSION['account'];
} else {
    $username = "Guest"; // Default value if 'account' is not set
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ez-mart</title>
    <style>
        .flex {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .custom-search-input {
            width: 200px; /
        }

        .custom-search-button {
            padding: 0.375rem 0.75rem; 
        }
        .navbar-brand img {
            max-height: 50px; 
            margin-top: -10px; 
        }

        .navbar-toggler {
            border-color: #fff; 
        }

        .navbar-toggler-icon {
            background-color: #fff; 
        }

        .navbar-nav .nav-link {
            color: #fff;
        }
        .nav-link
        {
            font-weight: bold;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container-fluid bg-info">
        <div class="flex">
            <!-- Start topHeaderArea -->
            <h4 class="m-0">ez-MART</h4>
            <form class="d-flex">
                <input type="search" class="form-control mb-2 custom-search-input" placeholder="Search">
                <button class="btn btn-warning custom-search-button p-0"><i class="fa fa-search" aria-hidden="true"></i> Search</button>
            </form>
            <!-- Stop topHeaderArea -->
          
        </div>
    </div>
      <!-- navbar start Here -->
            <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-success">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="image/ez-logo.png" alt="Logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Categorise
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <?php
            include "admin/config.php";
            $sqlC="select * from categories";
            $result8=mysqli_query($conn,$sqlC);
        if(mysqli_num_rows($result8))
        {

            while($cat=mysqli_fetch_assoc($result8))
            {?>

<li><a class="dropdown-item" href="showProductData.php?pid=<?php echo $cat['c_id']?>"><?php echo $cat['name']?></a></li>
            <?php
            }
        }
            else{
                echo "Data not found";
            }
            ?>

        
           
          </ul>
        </li>
                <li class="nav-item">
                    <a class="nav-link" href="cnt.php">Contact</a>
                </li> <li class="nav-item">
                    <a class="nav-link" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">Sign Up</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">Log In</a>
                </li>
                <li class="nav-item">
    <a class="nav-link text-warning">Hi, <?php echo $username; ?></a>
</li>
            </ul>
        </div>
    </div>
</nav>

                </div>
            </div>
    <!-- navbar stop Here -->