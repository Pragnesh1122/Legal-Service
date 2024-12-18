<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>navbar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .navbar {
      margin: 0;
      padding: 0;
    }

    .ser {
      font-size: 1.8rem;
      margin: 4px;
      padding: 4px;
    }
    
    .btn {
      /* font-size: 1.8rem; */
      /* font-weight: 400; */
    }

    .container-fluid {
      background-color: grey;
    }

    .btn:hover {
      background-color: rgb(86, 72, 72);
      color: white;
    }

    .btn {
      color: whitesmoke
    }

    </style>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    
    <div class="container-fluid">
      
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          </li>
          <li class="nav-item">
            <a class="nav-link active  ser" aria-current="page" href="./home.php" style=" color: whitesmoke;" >Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active ser" aria-current="page" href="./aboutus.php" style=" color: whitesmoke;">About US</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active ser" aria-current="page" href="./contactus.php" style=" color: whitesmoke;">Contact US</a>
          </li>
          <li class="nav-item" style="margin: 16px; padding: 2px;">
            <span><i class="fa fa-search"></i></span>
            <input type="text" style="width: 500px; border-radius: 5px; padding: 3px;">
          </li>
          <li class="nav-item">
            <a class="nav-link active ser" aria-current="page" href="./legalzoom.html" style=" color: whitesmoke;">My Services</a>
          </li>
         

      </div>
      <div class="ms-auto">
      <?php
            // session_start();
            if (isset($_SESSION['user'])) {
                echo ' <button class="btn" type="submit"><a href="logout.php" class="nav-link active ser">logout</a></button>';
                echo '        <a href="myprofile.php" style="text-decoration: none;"> <span style="height: 30px; width: 30px;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
              </svg>
            </span>
          </a>
          <i class="bi bi-person"></i>';
            } else {
                echo '<button class="btn" type="submit"><a href="login.php" class="nav-link active ser">login</a></button>';
                echo '<button class="btn" type="submit"> <a href="signin.php" class="nav-link active ser">Signup</a></button>';
            }
            ?>

      </div>
    </div>
  </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>