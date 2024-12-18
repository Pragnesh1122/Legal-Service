<?php
require("data/connect1.php");
$showAlert = false;
$register = false;
$exist = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["email"];
  $name = $_POST['name'];
  $phno = $_POST["phone"];
  $aadhar = $_POST["Aadhar"];
  $password = $_POST["pass"];
  $cpassword = $_POST["repass"];
  // $aadhar_image = $_FILES['aadhar_image']['name'];
  // $cat_image = $_FILES['cat_imag']['name'];
  // $sql1 = "SELECT * FROM users Where email='$username'";
  // $sql2 = "SELECT * FROM users Where MobileNo='$phno'";
  // $result1 = mysqli_query($conn, $sql1);
  // $num1 = mysqli_num_rows($result1);
  // $result2 = mysqli_query($conn, $sql2);
  // $num2 = mysqli_num_rows($result2);
  // if ($num1 > 0 || $num2 > 0) {
  //   $exist = true;
  //   if ($num1 > 0) {
  //     echo "<script>alert('Email Already Exist');</script>";
  //   }
  //   if ($num2 > 0) {
  //     $exist = true;
  //     echo "<script>alert('Phone Number already exist.');</script>";
  //   }
  // } 
   if (empty($username)) {
    echo "<script>alert('Username is required')</script>";
  } else {
    if (($password == $cpassword) && $exist == false) {
      $hash = password_hash($password, PASSWORD_DEFAULT);
      $sql = "INSERT INTO `users` (`Name`, `phone`, `email`, `aadhar`, `password`) VALUES ('$name', '$phno', '$username', '$aadhar','$cpassword')";
      $result = mysqli_query($conn, $sql);
      // move_uploaded_file($_FILES['cat_imag']['tmp_name'],"uploads/".$cat_image);
        $insert = true;
      if ($result) {
        $showAlert = true;
        // header("location:login.php");
      }
    } else {
      $showError = "Both Password Are not same";
    }
  }

}
?>
<?php
if ($showAlert) {

  echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> Your account is now created and you can login
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">×</span>
  </button>
  </div> ';
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <style>
    body{
      background: #f2efef;
    }
    input{
      border : 0px solid black ;
      /* border-bottom :  3px dashed red !important;; */
           width : auto;
           height:45px;
           padding: 9.5px 10px!important;
             font-size: .8rem;
               color:#fff;
                   text-transform: uppercase;
         box-shadow: inset 0 0 10px rgba(0,0,0,.2);
           transition:.3s ease all;
           outline:none;
           position: relative;
      /* top :-10px;
           left: 10px; */

    }
  </style>
</head>
<body>
  <?php
  require("data/navbar.php");
  ?>


<div class="container my-3">
    <form action="signin.php" method="POST" enctype="multipart/form-data">
      <h3 style="text-align: center;">Welcome To Signup Page</h3>
      <div class="form-outline">
        <label class="form-label" for="name">Name</label>
        <input type="name" id="pro" class="form-control" name="name">
      </div>
      <div class="form-outline">
        <label class="form-label" for="typePhone">Phone number</label>
        <input type="tel" id="typePhone" class="form-control" name="phone">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
      </div>
      <div class="mb-3">
        <label for="Aadhar" class="form-label">Aadhar No:</label>
        <input type="tel" class="form-control" name="Aadhar" id="exampleInputPassword1">
      </div>
      <div class="mb-3">
        <label for="cat_imag" class="form-label">Upload Aadhar</label>
        <input type="file" class="form-control" name="cat_imag" placeholder="Upload Image" aria-label="Username" aria-describedby="basic-addon1">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" name="pass" id="exampleInputPassword1">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="repass">
      </div>
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
      </div>
      <div>
        <button type="submit" class="btn" style="background-color:rgb(163,163,163);">Submit</button>
        <button type="reset" class="btn" style="background-color:rgb(163,163,163);">Reset</button>
      </div>
    </form>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>