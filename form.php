<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    require ("data/connect.php");
    $email = $_POST['email'];
    $password = $_POST['password'];
    // $name = $_POST['fn'];
    $dob = $_POST['dob'];
    $phone = $_POST['phone'];
    $pro = $_POST['fn'];
    $case = $_POST['case'];
    echo "$email";
    $sql = "SELECT * FROM users Where email='$email'";
    $result = mysqli_query($conn,$sql);
    // $num = mysqli_num_rows($result);
require("data/connect.php");
$showAlert = false;
$register = false;
$exist = false;

 
    
    
    $sql = "INSERT INTO `users` (`name`, `email`, `phoneno`, `dob`, `case`) VALUES ('$pro', '$email', '$phone', '$dob', '$case')";
      $result = mysqli_query($conn, $sql);
      if ($result) {
        $showAlert = true;
      }
    else {
     echo "some error occur,Please try again";
    }}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        h2{
            text-align: center;
        }
        body{
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            /* background-color: rgb(206, 164, 164); */
        }
        body{
      background: #f2efef;
    }
        input{
      border : 0px solid black ;
      /* border-bottom :  3px dashed red !important;; */
           width : auto;
           height:45px;
           /* margin:-6% -7%; */
           padding: 9.5px 10px!important;
             font-size: .8rem;
               color:black;
                   text-transform: uppercase;
         box-shadow: inset 0 0 10px rgba(0,0,0,.2);
           transition:.3s ease all;
           outline:none;
           position: relative;
      /*      top :-10px;
           left: 10px; */
    }
    h2{
    text-align: center;
    border: 2px solid blueviolet;
    border-radius: 10px;
    width: 80%;
    height: 40px;
    margin: auto;
    background-color: rgba(188, 165, 165, 0.737);
}
    </style>
</head>
<body>
     
    <div class="Register">
       
      <form action="form.php"  method="POST">
        <h2>Appointment Booking Form</h2>
        <br><br>
        Email : <input type="email" name="email" placeholder="Enter Your Email" id="email">
       <br>
       <br>
        Name : <input type="text" name="fn" placeholder="Enter Your Name" id="fn">
        <br>
        <br>
        Date of Birth : <input type="date" name="dob">
        <br><br>
        
        Contact No. : <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
        <br></br>
        Password : <input type="password" placeholder="Password" name="password">
        <br><br>
        
        State : <select name="state" id="state" name="state">
            <option value="">Gujarat</option>
            <option value="">Delhi</option>
            <option value="">Uttar pradesh</option>
            <option value="">Chennai</option>
            <option value="">Maharastra</option>
        </select>
        <br><br>
 
        <label for="case">Case Description : </label> <br>
        <textarea name="case" id="case" cols="20" rows="10"></textarea>
         <br><br>

        Aadhar Card : <div class="input-group mb-3">
            <input type="file" name="aadhar">
            <label class="input-group-text">Upload</label>
          </div>
          <br><br>
        <button id="btn">Submit</button>
        <br><br>

    </form>
    <p>if you are not login
        click here
        <a href="login.php" target="_blank">Login</a>
    </p>
</div>
   
</body>

<style>
    input{
        /* background-color: rgb(199, 187, 187);
        color: rgb(199, 187, 187); */
        border-radius: 4px;
    }
    .Register{
        /* background-color: rgb(212, 193, 193); */

        margin: 450px;
        margin-top: 50px;
         padding-left: 10px;
        /* border: 3px solid black; */
        border-radius: 50px;
        justify-content: center;
    }
    
    
    b{
        padding-left: 150px;
        font-size: 35px;
        font-family: arial;
    }

    #btn{
        background-color: blue;
        color: white;
        font-size: 21px;
        margin-top: -50px;
        margin-left: 200px;
    }

    #btn:hover{
        background-color: burlywood;
        color: black;
    }

    P{
        padding-left: 150px;
    }

    #email{
        width: 300px;
    }

    #name{
        width: 300px;
        }

    

</style>
</html>