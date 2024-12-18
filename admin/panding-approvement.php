<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
    .card{
        margin:1rem;
        padding: 1rem;
        display: block;
        background-color: #ada6a6;
    }
    .container{
        /* display: flex; */
    }
    a{
        list-style: none;
        text-decoration: none;
    }
    a:hover{
        color: grey;
    }
    #submit-button,#reject{
        border-radius: 0.5rem;
    }
    </style>
  </head>
  <body>
  <h3 style="text-align:center; margin: 2px;">Approve or Reject Diffrent Service Provider</h3>
    <div class="container">
      <div class="row">
        <div class="col-4">
    <div class="card">
    <p>Service Provide: Notaries</p>
    <p>Name : Sandip Yadav</p>
    <p>Age : 40 </p>
    <!-- <p>Case Histrory : 50</p> -->
    <p>Speciality : Real Estete Law</p>
    <p>client : 50+</p>
    <p> Document: <a href="certificate.pdf">licence.pdf</a></p>
    <p> Fees : 1000</p>
    <button id='submit-button'>Approved</button>
    <button id='reject'>Reject</button>
    </div>
    </div>
    <div class="col-4">
    <div class="card">
    <p>Service Provide: Notaries</p>
<p>Name : Sandip Yadav</p>
<p>Age : 40 </p>
<p>Speciality : Real Estete Law</p>
<p>client : 50+</p>
<p> Document: <a href="certificate.pdf">licence.pdf</a></p>
<p> Fees : 1000</p>
<button id='submit-button'>Approved</button>
<button id='reject'>Reject</button>
</div>
    </div>
<div class="col-4">
    <div class="card">
<p>Service Provide: Notaries</p>
<p>Name : Rajesh Kumar</p>
<p>Age : 35 </p>
<p>Speciality : Family Law</p>
<p>client : 100+</p>
<p> Document: <a href="certificate.pdf">licence.pdf</a></p>
<p> Fees : 2000</p>
<button id='submit-button'>Approved</button>
<button id='reject'>Reject</button>
</div>
    </div>
<div class="col-4">
    <div class="card">
<p>Service Provide: Notaries</p>
<p>Name : Priya Sharma</p>
<p>Age : 30 </p>
<p>Speciality : Business Law</p>
<p>client : 75+</p>
<p> Document: <a href="certificate.pdf">licence.pdf</a></p>
<p> Fees : 1500</p>
<button id='submit-button'>Approved</button>
<button id='reject'>Reject</button>
</div>
    </div>
<div class="col-4">
    <div class="card">
<p>Service Provide: Notaries</p>
<p>Name : Rahul Singh</p>
<p>Age : 45 </p>
<p>Speciality : Immigration Law</p>
<p>client : 200+</p>
<p> Document: <a href="certificate.pdf">licence.pdf</a></p>
<p> Fees : 2500</p>
<button id='submit-button'>Approved</button>
<button id='reject'>Reject</button>
</div>
    </div>
<div class="col-4">
    <div class="card">
<p>Service Provide: Notaries</p>
<p>Name : Aisha Khan</p>
<p>Age : 32</p>
<p>Speciality : Criminal Law</p>
<p>client : 150+</p>
<p> Document: <a href="certificate.pdf">licence.pdf</a></p>
<p> Fees : 2000</p>
<button id='submit-button'>Approved</button>
<button id='reject'>Reject</button>
</div>
    </div>
<div class="col-4">
    <div class="card">
<p>Service Provide: Notaries</p>
<p>Name : Vikas Gupta</p>
<p>Age : 42</p>
<p>Speciality : Estate Planning Law</p>
<p>client : 250+</p>
<p> Document: <a href="certificate.pdf">licence.pdf</a></p>
<p> Fees : 3000</p>
<button id='submit-button'>Approved</button>
<button id='reject'>Reject</button>
</div>
    </div>
<div class="col-4">
    <div class="card">
<p>Service Provide: Notaries</p>
<p>Name : Neha Patel</p>
<p>Age : 31</p>
<p>Speciality : Tax Law</p>
<p>client : 100+</p>
<p> Document: <a href="certificate.pdf">licence.pdf</a></p>
<p> Fees : 1500</p>
<button id='submit-button'>Approved</button>
<button id='reject'>Reject</button>
</div>
    </div>
<div class="col-4">
    <div class="card">
<p>Service Provide: Notaries</p>
<p>Name : Amit Shah</p>
<p>Age : 43</p>
<p>Speciality : Intellectual Property Law</p>
<p>client : 150+</p>
<p> Document: <a href="certificate.pdf">licence.pdf</a></p>
<p> Fees : 2000</p>
<button id='submit-button'>Approved</button>
<button id='reject'>Reject</button>
</div>
    </div>
    <div class="col-4">
    <div class="card">
    <p>Service Provide: Adovate</p>
    <p>Name : Mehul Choksy</p>
    <p>Age : 31 </p>
    <!-- <p>Case Histrory : 50</p> -->
    <p>Speciality : Crime Releted Case</p>
    <p>Solved Case:32</p>
    <p> Document: <a href="certificate.pdf">certificate.pdf</a></p>
    <p> Fees : 18000</p>
    <button id='submit-button'>Approved</button>
    <button id='reject'>Reject</button>
    <!-- <p>Status : Case not Solved</p> -->
    </div>
    </div>
    <div class="col-4">
    <div class="card">
    <p>Service Provide: Arbitator</p>
    <p>Name : Vishvas Sinha</p>
    <p>Age : 70 </p>
    <!-- <p>Case Histrory : 50</p> -->
    <p>Speciality : Retired judge at Gujaarat High Court (15 year)</p>
    <p>Expereince : Advocate at Gujaarat High Court (20 year)</p>
    <!-- <p>Solved Case:32</p> -->
    <p> Document: <a href="certificate.pdf">retiredmentcertificate.pdf</a></p>
    <p> Fees : 5000</p>
    <button id='submit-button'>Approved</button>
    <button id='reject'>Reject</button>
    </div>
    </div>
    </div>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <script>
    // Get the submit button element
    const buttons = document.querySelectorAll('#submit-button');

// Add an event listener to each button
buttons.forEach(button => {
  button.addEventListener('click', function() {
    // Display an alert message
    alert('Data is Approved!');
  });
});

// Get the reject button element
const Buttons = document.querySelectorAll('#reject');

// Add an event listener to each 

Buttons.forEach(button => {
  button.addEventListener('click', function() {
    // Display an alert message with the rejected message
    alert('The request has been rejected!');
  });
});

  </script>
  </body>
</html>