<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body{
            background-color: #bbaa;
        }
        p{
            font-size: large;
            margin: 4px;
            padding: 4px;
        }
        h1{
            display: flex;
            justify-content: center;

            width: 30%;
            height: 50px;
            margin: auto;
            text-align: center;
            /* margin: 5px; */
            /* padding: 10px; */
            border: 2px solid blue;
            border-radius: 30px;
            background-color: #bbba
        }
        .container{
            margin: 5px;
            padding: 5px;
            justify-content: center;
            text-align: center;
        }
        .row{
            margin: 5px;
            padding: 5px;
        }
    </style>
</head>
<body>
    <?php
    require('data/navbar.php');
    ?>
    <div class="container">
        <h1>About Us</h1>
        <div class="row">
            <div class="col-12">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img src="logo.jpg" alt="About Us" class="img-fluid">
            </div>
            <div class="col-md-6">
                <h2>LegalEase</h2>
                <div style="text-align: left;">
                    <p>
                        incentivize legal service providers to offer by our services on the platform
                    </p>
                    <p>
                        Transparency and accountability in the services provided by legalzoom
                    </p>
                    <p>
                        clients can easily find the right legal service provider for their specific legal needs
                    </p>
                    <p>
                        incentivizing legal service providers, such as offering them bonuses, rewards, or other forms of recognition for their services.
                    </p>
                <p>
                    LegalEase is a service base platform that provide all legal service of govt. of india. We are passionate about give all service in low cost and easyly.
                </p>
                <p>
                    Our team of experienced professionals is dedicated to providing our customers with the best possible service. We are committed to our service.
                </p>
                <p>
                    If you have any questions or would like to learn more about legalEase, please contact us today.
                </p>
                <p>
                    our first goal is customer.
                </p>
                <p>
                    after compliting some task you also get rewards.
                </p>
                <p>
                    Transperency also maintain here.
                </p>
            </div>
            </div>
        </div>
    </div>
</body>
</html>
