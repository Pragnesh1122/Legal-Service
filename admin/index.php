<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="../style.css">
   <style>
    button{
        background-color: #17a2b8;
    }
   </style>
  </head>
  
  <body>
    <div class="container-fluid" style="margin:0; padding:0">
  <nav class="navbar navbar-expand-lg bg-info">
        <div class="container-fluid">
            <img src="" alt="logo" class=logo>
            <nav class="navbar navbar-expand-lg">
                <ul class="navbar nav">
                    <li class="nav-item">
                        <a href="" class="nav-link">Welcome Guest</a>
                    </li>
                </ul>
        </div>
    </nav>

    <div class="bg-light">
        <h3>Manage Detail</h3>
    </div>

    <div class="row">
        <div class="col-md-12 bg-secondary p-1">
            <div class="button text-center m-2">
            <button><a href="index.php?insert_catagory" class="nav-link text-light hello">Insert Catagory</a></button>
            <button><a href="index.php?view_catagory" class="nav-link text-light hello">Insert or View Service Provider</a></button>
            <button><a href="index.php?panging_service" class="nav-link text-light">view panding Service Details</a></button>
            <button><a href="index.php?panding_approvement" class="nav-link text-light">Panding Approvement</a></button>
            <button><a href="index.php?view_payment" class="nav-link text-light">View Payment</a></button>
            <button><a href="index.php?view_user" class="nav-link text-light">List User</a></button>
            <button><a href="index.php?logout" class="nav-link text-light">Logout</a></button>
            </div>
        </div>
    </div>

    <!-- Fourth Child -->
    <div class="container">
        <?php
        if(isset($_GET['insert_catagory'])){
            include ('insert-catagory.php');
        }
        if(isset($_GET['panging_service'])){
            include ('panding_service.php');
        }
        if(isset($_GET['view_catagory'])){
            include ('service-provider.php');
        }
        if(isset($_GET['view_payment'])){
            include ('payment.php');
        }
        if(isset($_GET['panding_approvement'])){
            include ('panding-approvement.php');
        }
        if(isset($_GET['view_user'])){
            include ('list-user.php');
        }
        if(isset($_GET['logout'])){
            include ('../logout.php');
        }
        if(isset($_GET['update'])){
            include ('update.php');
        }
        ?>
    </div>
    </div>

    <?php 

    ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>