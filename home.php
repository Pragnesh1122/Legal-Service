<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Legal Services</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    *{
      margin: 0;
      padding: 0;
    }
    .img {
      filter: grayscale(70%);
      position: relative;
      text-align: center;
      color: white;
    }
    .hello {
      filter: grayscale(100%);
      position: relative;
      text-align: center;
      color: white;
      
    }
    .bottom-center {
      position: absolute;
      top: 1rem;
      right: 6rem;
    }
    
    .bottom-left {
      position: absolute;
      top: 6rem;
      right: 6rem;
    }
    .para {
      color: #ffffff;
      font-size: 40px;
      font-weight: 800;
      letter-spacing: -1px;
      line-height: 48px;
      margin: 50px 0 25px;
    }
    .cont{
      font-size: 40px;
      font-weight: 1000;
      letter-spacing: -1px;
      line-height: 48px;
      margin: 50px 0 25px;
      list-style: none;
    }
    
    .cont li{
      text-decoration: none;
      color: whitesmoke;
      /* color: black; */
      font-size: larger;
      font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }
    .introLayer1 {
      margin: 1.5px;
      padding: 1.5rem;
      position: relative;
      background: #f9e3d3 url(../images/bg.jpg) no-repeat fixed left bottom / cover;
      margin: -1% auto !important;
      text-align: center;
    }
    .imge {
      position: absolute;
    }

    .lg\:pb-20 {
      padding-bottom: 5rem;
    }

    .lg\:pt-20 {
      padding-top: 5rem;
    }

    .pb-12 {
      padding-bottom: 3rem;
    }

    .pt-12 {
      padding-top: 3rem;
    }

    .mx-auto {
      margin-left: auto;
      margin-right: auto;
    }

    .z-10 {
      z-index: 10;
    }

    .relative {
      position: relative;
    }

    .container {
      max-width: 1536px;
    }

    .container {
      max-width: 1280px;
    }

    .container {
      max-width: 1024px;
    }

    .container {
      max-width: 768px;
    }

    .container {
      max-width: 640px;
    }

    .container {
      width: 100%;
      padding-right: 1.5rem;
      padding-left: 1.5rem;
    }
    .fil{
      /* font-weight: 100; */
      padding: 1px;
      font-size:1.3rem;
      text-align: center;
      justify-content: center;
      font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }
    .bi-person {
  /* border: 1px solid black; */
  border-radius: 50%;
  height: 50px;
  width: 50px;
  color: #ffffff;
}
footer{
  background-color: black;
  color: white;
  text-align: center;
}
  </style>
</head>

<body>
<?php
  require('data/navbar.php');
?>
  <div class="container-fluid img">
    <img src="https://blog.infraspeak.com/wp-content/uploads/2021/08/Maintenance-as-a-Service.jpeg" alt=""
      style="height: 500px; width: 100%; ">
    <div class="bottom-left">
      <div class="para">
        <p>All the legal help you need.</p>
        <p>Anytime. Anywhere.</p>
        <p>At low cost in less time</p>
      </div>
    </div>
  </div>
  <div class="introLayer1">
    <h1 class="home-page-title">Access an online library of <div class="yellow-bg" id="introLayer4">85,000+</div>
      state-specific legal forms</h1>
    <div class="home-page-subtitle">India Legal Forms has been providing legal documents to individual consumers,
      attorneys, and small businesses for more than 25 years.</div>
  </div>
  <div class="row cols-4 p-2 container-fluid justify-content-center">
      <a href="advocate.php">
      <div class="card p-4 m-4" style="width: 26rem; height: 26rem; ">
        <div class="hello">
          <img src="https://media.istockphoto.com/id/1168013916/photo/judge-and-gavel-in-courtroom.jpg?s=2048x2048&w=is&k=20&c=G702XEGyGxz2LwFx_6SAZAinj4rCLtvb9QfoNdi5P4Y=" alt="" style="width: 100%; height: 360px; filter: brightness(50%);">
          <div class="bottom-center">
            <div class="cont">
             <li>Advocates</li>
             <div class="fil">
             <p>Get India's Best advocates here with low cost
             </p>
            </div>
            </div>
          </div>
        </div>
      </a>
      </div>
    <div class="card p-4 m-4" style="width: 26rem;height: 26rem ">
      <a href="Notaries.php">
        <div class="hello">
          <img src="https://tile.loc.gov/image-services/iiif/service:ll:llscd:57026883:00010000/full/pct:50/0/default.jpg" alt="" style="width: 100%; height: 360px; filter: brightness(50%);">
          <div class="bottom-center">
            <div class="cont">
             <li>Notaries</li>
             <div class="fil">
              <p>All notrie releted System Happen in less time</p>
             </div>
            </div>
          </div>
        </div>
      </a>
      </div>
      <div class="card p-4 m-4" style="width: 26rem; height: 26rem">
      <a href="arbitrator.php">
        <div class="hello">
          <img src="https://images.unsplash.com/photo-1589829545856-d10d557cf95f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="" style="width: 100%;  height: 360px; filter: brightness(50%);">
          <div class="bottom-center">
            <div class="cont">
             <li>Arbitators</li>
             <div class="fil">
              <p>Get India's most Expereienced arbitator here.
              </p>
             </div>
            </div>
          </div>
        </div>
        </a>
      </div>
      <div class="card p-4 m-4" style="width: 26rem; height: 26rem; ">
      <a href="documentwriter.php">
        <div class="hello">
          <img src="https://th-thumbnailer.cdn-si-edu.com/sWf0xF1il7OWYO8j-PGqwBvxTAE=/1000x750/filters:no_upscale():focal(2550x1724:2551x1725)/https://tf-cmsv2-smithsonianmag-media.s3.amazonaws.com/filer_public/9a/d7/9ad71c28-a69d-4bc0-b03d-37160317bb32/gettyimages-577674005.jpg" alt="" style="width: 100%; height: 360px; filter: brightness(50%);">
          <div class="bottom-center">
            <div class="cont">
             <li>Document Writers</li>
             <div class="fil">
              <p>Larger Community of Document Writer Are here
              </p>
             </div>
            </div>
          </div>
        </div>
        </a>
      </div>
      <div class="card p-4 m-4" style="width: 26rem; height: 26rem; ">
      <a href="Mediator.php">
        <div class="hello">
          <img src="https://icieducation.co.uk/blog/wp-content/uploads/2022/02/Mediator.jpg" alt="" style="width: 100%; height: 360px; filter: brightness(50%);">
          <div class="bottom-center">
            <div class="cont">
             <li>Mediator</li>
             <div class="fil">
              <p>Helping people resolve conflict and build consensus.
              </p>
             </div>
            </div>
          </div>
        </div>
        </a>
      </div>
      <div class="card p-4 m-4" style="width: 26rem; height: 26rem; ">
      <a href="corporatesolution.php">
        <div class="hello">
          <img src="https://media.istockphoto.com/id/1168013916/photo/judge-and-gavel-in-courtroom.jpg?s=2048x2048&w=is&k=20&c=G702XEGyGxz2LwFx_6SAZAinj4rCLtvb9QfoNdi5P4Y=" alt="" style="width: 100%; height: 360px; filter: brightness(50%);">
          <div class="bottom-center">
            <div class="cont">
             <li>Corporate solutions</li>
             <div class="fil">
              <p>Helping businesses succeed and avoid legal risk..
              </p>
             </div>
            </div>
          </div>
        </div>
      </div>
      </a>
    </div>
    <footer>
      &copy; All Copy Rights Are Reserved
    </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>

</html>