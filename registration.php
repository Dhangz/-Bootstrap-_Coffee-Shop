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
      background-position: center;
      background-size: cover;
      background-repeat: no-repeat;
    }
  </style>
</head> 
<body class="h-100 pb-5">

  <nav class="navbar navbar-light bg-transparent p-5">
  <div class="container-fluid">
    <a class="navbar-brand text-light" style="margin-left: 30px;"><img height="70" src="images/logo.png.crdownload" alt="Logo"></a>
    <ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link text-light" aria-current="page" href="index.php">Home</a>
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
  <div class="d-flex justify-content-center">
    <div class="align-items-center">

        <div class="container border border-warning border-3 p-5 rounded" style="background-color: rgba(255, 255, 255, 0.2); width: 600px;">
          <form>
            <h2 class="mb-5 text-center text-warning">Sign Up</h2>
            <div class="row mb-3">

            <div class="row g-2">
              <div class="col-md">
                <div class="form-floating mb-3">
                  <input type="email" class="form-control bg-transparent text-warning" id="floatingInputGrid" placeholder="First Name">
                  <label class="text-light" for="floatingInputGrid">First Name</label>
                </div>
              </div>

              <div class="col-md">
                <div class="form-floating mb-3">
                  <input type="email" class="form-control bg-transparent text-warning" id="floatingInputGrid" placeholder="Last Name">
                  <label class="text-light" for="floatingInputGrid">Last Name</label>
                </div>
              </div>
            </div>

            <div class="row g-2">
              <div class="col">
                <div class="form-floating mb-3">
                  <input type="email" class="form-control bg-transparent text-warning" id="floatingInput" placeholder="name@example.com">
                  <label class="text-light" for="floatingInput">Email address</label>
                </div>
              </div>
            </div> 

            <div class="row g-2">
              <div class="col">
                <div class="form-floating mb-3">
                  <input type="number" class="form-control bg-transparent text-warning" id="floatingInput" placeholder="name@example.com">
                  <label class="text-light" for="floatingInput">Mobile No</label>
                </div>
              </div>
            </div> 

            <div class="row g-2">
              <div class="col">
                <div class="form-floating mb-3">
                  <input type="password" class="form-control bg-transparent text-warning" id="floatingInput" placeholder="name@example.com">
                  <label class="text-light" for="floatingInput">Password</label>
                </div>
              </div>
            </div> 

            <div class="row g-2">
              <div class="col">
                <div class="form-floating mb-3">
                  <input type="password" class="form-control bg-transparent text-warning" id="floatingInput" placeholder="name@example.com">
                  <label class="text-light" for="floatingInput">Confirm Password</label>
                </div>
              </div>
            </div> 

            <div class="row g-2">
              <div class="col text-end">
              <button type="submit" class="btn btn-warning px-5">Sign In</button>
              </div>
            </div> 



            
          </form>
  </div>

      </div>
    </div>
  </div>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>