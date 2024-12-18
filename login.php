
<?php

//include the top menu bar
$login = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    require ("data/connect.php");
    $email = $_POST['email'];
    $password = $_POST['password'];
    $service = $_POST['service'];
    // echo "$service";
    $sql = "SELECT * FROM users Where email='$email'";
    $result = mysqli_query($conn,$sql);
    $num = mysqli_num_rows($result);
    if($num ==1){
    while($row=mysqli_fetch_assoc($result)){
        if (password_verify($password, $row['Password'])){
          $login = true;
          session_start();
          $_SESSION['user']  = $email;
          // echo $_SESSION['user'];
          
          // echo "You Are Login Succesfully";
          //  echo "You Are Login Succesfully,now You Can Order";
          echo '<div class="modal-body">
          <h5>Popover in a modal</h5>
          <p>This <a href="#" role="button" class="btn btn-secondary popover-test" title="Popover title" data-content="Popover body content is set in this attribute.">button</a> triggers a popover on click.</p>
          <hr>
          <h5>Tooltips in a modal</h5>
          <p><a href="#" class="tooltip-test" title="Tooltip">This link</a> and <a href="#" class="tooltip-test" title="Tooltip">that link</a> have tooltips on hover.</p>
        </div>';
        if($service == 'consumer'){
          header("location:home.php");
        }
        else{
          header('location:Service Provider/service.html');
        }
      //  exit();
        }
        else{
            echo "Your Password is Wrong";
        }
    }
  } 
    else{
      echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Sorry!</strong> You Are not Registered...
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div> ';
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
      body{
      background: #f2efef;
    }
    input{
      border : 1px solid black ;
      /* border-bottom :  3px dashed red !important;; */
           width : auto;
           height:45px;
           padding: 9.5px 10px!important;
             font-size: .8rem;
               color:#fff;
                   /* text-transform: uppercase; */
         box-shadow: inset 0 0 10px rgba(0,0,0,.2);
           transition:.3s ease all;
           outline:none;
           position: relative;
      /* top :-10px;
           left: 10px; */

    }
    select{
      border : 1px solid black ;
      border-radius: 3px;
      width : auto;
           height:45px;
           padding: 9.5px 10px!important;
             font-size: .8rem;
             transition:.3s ease all;
           outline:none;
           position: relative;
           box-shadow: inset 0 0 10px rgba(0,0,0,.2);
    }
    </style>
  </head>
  <body>
  <?php
    require ("data/navbar.php");
    ?>
    <div class="container m-3">
        <form action="login.php" method="POST">
        <h3 style="text-align: center;">Welcome To Login Page</h3>
        <div>

<select name="service" id="cars">
  <option value="volvo">Select Role</option>
  <option value="consumer">Consumer</option>
  <option value="provider">Service_Provider</option>
</select
        </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" name ="password" id="exampleInputPassword1">
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div>
          <button type="submit" class="btn bg-info">Submit</button>
          <button type="reset" class="btn" >Reset</button>
          <p>If you Are not registred ,please click here <a href="signin.html">Register</a> </p>
        </form>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>