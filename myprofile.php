<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile create Design</title>
    <link rel="stylesheet" href="profile.css">
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'open sans', sans-serif
        }

        pre {
            margin: 5px;
            padding: 5px;
        }

        div {
            display: colum;
        }

        .container {
            width: 100%;

        }

        .box {
            width: 800px;
            padding: 10px;
            border: 3px solid chocolate;
            margin: 10px auto;
        }

        .box img {
            max-width: 190px;
            height: 190px;
            display: block;
            object-fit: cover;
            padding: 5px;
        }

        .heading {
            text-align: right;
        }

        .c1 {
            text-align: left;
            color: rgb(5, 97, 5);
            background-color: rgb(236, 234, 218);
            border-image: fill;

        }

        .text {
            text-align: right;
            color: rgb(5, 97, 5);
        }

        .info {
            disply: right;
        }
        img{
            width: 100%;
        }
    </style>
</head>

<body>
        
    <div class="container">
        <div class="box">
            <div class="heading">

            </div>
            <div class="c1">
            <?php
require('data/connect.php');
session_start();
$id = $_SESSION['user'];

$sql = "select * from users where email = '$id'";
$result = mysqli_query($conn,$sql);
while ($row_data=mysqli_fetch_assoc($result))
            echo '   <img src="https://www.leadindia.law/uploads/advocates/profile/medium/mukesh-kumar-solanki.jpeg">
                <hr>
                <div class="c1">
                
                    <pre>Name : Karan Joshi    
                        <p> Mobile NO:9925616772 </p>
                        <p> Email id :karan1972@gmail.com</p>
                        <p> Date of birth:19/07/1986 </p>
                        <p>Adhar card:XXXX XXXX 9012</p>
        </pre>
                    <br>
                    <hr>';
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>