<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Home page</title>
    <link rel="website icon" type="png" href="src/images/Logo3.png">

</head>

<body>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="src/stylesheet.css">



    <!-- Navigation Bar -->
    
    <ul class="nav navbar navbar-expand-sm justify-content-center sticky-top">
  <li class="nav-item">
    <a class="nav-link active" href="index.php">Home</a>
  </li>
  <a class="navbar-brand" href="index.php">
    <img src="src/images/Logo3.png" width="60" height="60" alt="Your Logo">
  </a>
  <li class="nav-item">
    <a class="nav-link" href="config/login.php">Sign in</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="config/register.php">Register</a>
  </li>

</ul>


    <!--Body starts here-->
    
    <div class="container-fluid mt-0">
        <div id="imageCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100 img-fluid" src="src/images/nurses.jpeg" alt="Image 1">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 img-fluid" src="src/images/Carousel (2).jpeg" alt="Image 2">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 img-fluid mh-100" src="src/images/Carousel (3).jpeg" alt="Image 3">
                </div>
            </div>
            <a class="carousel-control-prev" href="#imageCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#imageCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            <ol class="carousel-indicators">
                <li data-target="#imageCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#imageCarousel" data-slide-to="1"></li>
                <li data-target="#imageCarousel" data-slide-to="2"></li>
            </ol>
        </div>
    </div>
    
    <!-- Text Box -->
    <div class="container mt-5 mb-5">
  <div class="row no-gutters">
    
    <div class="col-md-12">
      <div class="section custom-bg1 text-white p-3">
        <h4 class="text-center">About us</h4>
      </div>
    </div>
    <!-- First Section -->
    <div class="col-md-4">
      <div class="section custom-bg2 text-white p-3" style="height: 235px;">
        <p>With our new appointment booking website, you can schedule appointments with your doctor, dentist, salon, or any other service provider in just a few minutes. Simply create an account, select the service you need, and choose a time that works for you. You can even book appointments online 24/7, so you can schedule your appointments at your convenience.</p>
      </div>
    </div>

    <!-- Second Section -->
    <div class="col-md-4">
      <div class="section custom-bg3 text-white p-3" style="height: 235px;">
        <p>No more waiting on hold or trying to find a time that works for everyone. Our appointment booking website is the fastest and easiest way to schedule your appointments online.</p>
      <p>Your health is our priority so do not hesitate to come to us and we will set you right</p>
      </div>
    </div>

    <!-- Third Section -->
    <div class="col-md-4">
      <div class="section custom-bg4 text-white p-3" style="height: 235px;">
        <p>You may schedule an appointment with any of our doctors who specialise in Dermatology, Cardiology, Neurolog, and Ophthalmology</p>
        <br>
        <p>Sign up now and make your appoinment.</p>
        <a href="config/register.php" class="button_s">Sign up</a>
      </div>
    </div>

  </div>
</div>
   <!-- Services box -->

   
  <!-- Doctor grid -->

  <!-- Single Row on Top -->
  <div class="container mt-5">
  <div class="row mb-0">
    <div class="col-md-12">
      <div class="alert custom-bg1 text-white">
        <h3 class="text-center">Meet our doctors</h3>
      </div>
    </div>

  <div class="card-group">
  <div class="card">
    <img class="card-img-top" src="src/images/Doctor (1).jpeg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Dr. Faisal AlShuwaier</h5>
      <p class="card-text">Dr. AlShuwaier is a compassionate and experienced Dermatologist who is dedicated to providing high-quality care to his patients.</p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="src/images/Doctor (2).jpeg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Dr. Khaled Ghorab</h5>
      <p class="card-text">Dr. Ghorab is a dedicated Cardiologist who is committed to providing high-quality care to his patients. </p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="src/images/Doctor (3).jpeg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Dr. Faisal AlShedokhi</h5>
      <p class="card-text">Dr. AlShedokhi is a skilled Neurologist and has performed thousands of successful procedures. He is meticulous and precise.</p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="src/images/Doctor (4).jpeg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Dr. Abdulaziz AlMoussa</h5>
      <p class="card-text">Dr. AlMoussa is a dedicated Ophthalmologist who is committed to providing high-quality care to his patients.</p>
    </div>
  </div>
</div>
</div>
</div>
</div>

<!-- Footer -->
<div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-12 py-3">
                <div class="row">
                    <div class="col-md-6">
                      <a href="index.php">
                        <img src="src/images/Logo3.png" alt="Logo" class="logo mr-2">
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