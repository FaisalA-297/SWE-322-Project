<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sign in</title>
</head>

<body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="../src/stylesheet.css">


    <!-- Navigation Bar -->
 
    <ul class="nav navbar navbar-expand-sm justify-content-center mb-5 sticky-top">
  <li class="nav-item">
    <a class="nav-link active" href="../index.php">Home</a>
  </li>
  <a class="navbar-brand" href="#">
    <img src="../src/images/Logo3.png" width="60" height="60" alt="Your Logo">
  </a>
  <li class="nav-item">
    <a class="nav-link" href="login.php">Sign in</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="register.php">Register</a>
  </li>
  
</ul>

    <!--Body starts here-->
    <div class="content">
    <div class="center">
    <form action="process_login.php" method="post">
    <div class="title">Login</div>
        <span class="inputs">
          <span class="inputf">
            <input type="text" id="name" class="input" name="name" placeholder="Name" required />
            <span class="label">Name</span>
      
          <span class="inputf">
          <input type="password" id="password" class="input" name="password" placeholder="Password" required />
            <span class="label">Password</span>

        </span>
        
        <input type="submit" class="btn" value="Login">
      
        <div class="text">
          New user? Create an account <a href="register.php">Register</a>
        </div>
      </form>
    </div>
</div>


<!-- Footer -->
<div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-12 py-3">
                <div class="row">
                    <div class="col-md-6">
                      <a href="index.php">
                        <img src="../src/images/Logo3.png" alt="Logo" class="logo mr-2">
                      </a>
                        <span class="copyright">© 2023 Crescent. All Rights Reserved.</span>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-4">
                            <a>Home</a>
                            </div>
                            <div class="col-md-4">
                            <a>Features</a>
                            </div>
                            <div class="col-md-4">
                            <a>Pricing</a>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-4">
                            <a>About</a>
                            </div>
                            <div class="col-md-4">
                            <a>Contact</a>
                            </div>
                            <div class="col-md-4">
                            <a>FAQs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="src/JS.js"></script>
</body>

</html>