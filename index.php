<!DOCTYPE html>
<html>
<head>
  <title>Coffee Shop</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">

  <style>
    *{
      color: rgb(255, 255, 255);
      font-family: Poppins, Verdana, Geneva, Tahoma, sans-serif;
    }

    body {
      background-image: linear-gradient(rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.7)), url('images/bg.jpg');
      background-position: right;
      background-size: cover;
      background-repeat: no-repeat;
      height: 100%;
    }
  </style>
</head> 
<body class="h-100 pb-5">

  <nav class="navbar navbar-light bg-transparent p-5">
  <div class="container-fluid">
    <a class="navbar-brand text-light" style="margin-left: 30px;"><img height="70" src="images/logo.png.crdownload" alt="Logo"></a>
    <ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link text-light" aria-current="page" href="#">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-light" href="#">About</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-light" href="#">Menu</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-light" href="#">Apps</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-light" href="#">Contact</a>
  </li>
</ul>
    <div class="d-flex">
      <a class="btn btn-outline-warning" style="margin-right: 5px;" href="login.php">Login</a>
      <a class="btn btn-warning text-light" style="margin-right: 20px;" href="registration.php">Sign Up</a>
    </div>
  </div>
</nav>

<div class="container mt-5">
  <div class="d-flex justify-content-start">
    <div class="align-items-center">
      <div class="col align-self-start">
        <h1 class="display-1 lh-1 fw-bold">Start your day <br> with a black coffee</h1>
      </div>
      <div class="col align-self-start mt-4">
        <p class="fs-6 lh-1">choose and taste delicious coffee <br> from
          the best beans.</p>
      </div>
        <div class="col align-self-start">
            <button class="btn btn-outline-warning" style="margin-right: 5px;">Order Now</button>
            <button class="btn btn-warning text-light" type="submit" style="margin-right: 20px;">Learn About Us</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container border border-warning p-3 mt-5 rounded"> 
      <strong><h3 class="text-center mb-3">Popular Now</h3></strong>
  <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <center>

    <div class="carousel-item active" data-bs-interval="10000">
      <div class="d-flex justify-content-evenly gap-2 px-5">

      <div class="card mb-3 bg-dark p-2" style="max-width: 500px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="images/c2.webp" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body text-start">
              <h5 class="card-title">Espresso Coffee</h5>
              <p class="card-text mt-4">With Milk</p>
              <p class="card-text text-warning">$5.7</p>
            </div>
          </div>
        </div>
      </div>

      <div class="card mb-3 bg-dark p-2" style="max-width: 500px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="images/c3.webp" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">  
            <div class="card-body text-start">
              <h5 class="card-title">Cappuccino Coffee</h5>
              <p class="card-text mt-4">with Chocolate</p>
              <p class="card-text text-warning">$6.3</p>
            </div>
          </div>
        </div>
      </div>

      </div>

    </div>
    <div class="carousel-item" data-bs-interval="2000">

      <div class="d-flex justify-content-evenly gap-3 px-5">

      <div class="card mb-3 bg-dark p-2" style="max-width: 500px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="images/c4.webp" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body text-start">
              <h5 class="card-title">Latte Art Coffee</h5>
              <p class="card-text mt-4">With Milk</p>
              <p class="card-text text-warning">$7.8</p>
            </div>
          </div>
        </div>
      </div>

      <div class="card mb-3 bg-dark p-2" style="max-width: 500px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="images/cw5.jpg"      class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body text-start">
              <h5 class="card-title">Allegro Coffee</h5>
              <p class="card-text mt-4">Powder,Whole Bean</p>
              <p class="card-text text-warning">$21.16</p>
            </div>
          </div>
        </div>
      </div>

    </div>


    </div>
    <div class="carousel-item">
      
      <div class="d-flex justify-content-evenly gap-2 px-5">

      <div class="card mb-3 bg-dark p-2" style="max-width: 500px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="images/pexels-alteredsnaps-15404792.jpg" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body text-start">
              <h5 class="card-title">Kicking Horse Coffee</h5>
              <p class="card-text mt-4">Whole Bean</p>
              <p class="card-text text-warning">$21.95</p>
            </div>
          </div>
        </div>
      </div>

      <div class="card mb-3 bg-dark p-2" style="max-width: 500px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="images/pexels-rahul-pandit-3251031.jpg" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body text-start">
              <h5 class="card-title">Lavazza Espresso Coffee</h5>
              <p class="card-text mt-4">Whole Bean</p>
              <p class="card-text text-warning">$47.35</p>
            </div>
          </div>
        </div>
      </div>
      
    </div>

    </div>
  </center>
  </div>
  
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon bg-warning" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon bg-warning" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>




<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>