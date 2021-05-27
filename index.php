<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <?php include "./head.php" ?>
  <body class="back" onload="hideLoader();">
    <!-- Loader -->
    <?php include "./loader.php"; ?>

    <!-- Navbar -->
    <?php include "./navbar.php" ?>
    <!-- Navbar End -->

    <!-- Title -->
    <div class="container my-5 ">
      <div class="row">
        <div class="col lg-6 col-md-6 col-sm-12 py-5 px-5 text-white d-flex flex-column justify-content-center">
          <div>
            <h6 style="font-size: 2rem;">Online Learning</h6>
            <h1 style="font-size: 4rem;" class="mb-4">Learn <strong class="text-dark">Everyday</strong></h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, consectetur? Perspiciatis delectus, facilis quidem doloribus culpa explicabo repellendus, quaerat ullam quod provident suscipit necessitatibus nihil voluptas doloremque mollitia dolorum quas.</p>
            <div>
              <a class="btn btn-dark py-2 pl-5 pr-5 font-weight-bold" href="./registration.php">Get Started</a>
            </div>
          </div>
        </div>
        <div class="col lg-6 col-md-6 col-sm-12 py-5 px-5 text-white">
          <img src="./assets/home.png" class="img-fluid" alt="Responsive image">
        </div>
      </div>
    </div>
    <!-- Title Ends-->


    <div class="container-fluid py-5 " style="background-color: #ECF0F1;">
      <div class="container">
        <div class="row">
          <div class="col lg-6 col-md-6 col-sm-12 py-5 px-5 text-white order-1">
            <img src="./assets/happy.png" class="img-fluid" alt="Responsive image">
          </div>
          <div class="col lg-6 col-md-6 col-sm-12 py-5 px-5 text-dark order-sm-1 d-flex flex-column justify-content-center">
            <h6 style="font-size: 2rem;">Get access to high quality learning!</h6>
            <h1 style="font-size: 4rem;" class="mb-4">Join Online Courses <strong class="text-dark">Today</strong></h1>
            <p>Etiam velit purus, vehicula quis imperdiet dignissim, convallis vitae nisl. Nullam facilisi. Pellentesque non pulvinar justo. Nullam eget neque ut tellus ornare ullamcorper ulla ambco mattis for nulla glavrida egesed!</p>
            <div>
              <a class="btn btn-dark py-2 pl-5 pr-5 font-weight-bold" href="#">READ MORE</a>
            </div>
          </div>
        </div>  
      </div>
    </div>


    <div class="container-fluid bg-white">
      <div class="container py-5 ">
        <div class="row">
          <div class="col lg-12 col-md-12 col-sm-12 py-5 px-5 ">
            <h1 style="font-size: 4rem;" class="text-center font-weight-bold">
            The Future That You Will See Soon
            </h1>
            <p class="text-center">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
            <div class="row">
              

              <div class="col-lg-4 col-md-4 col-sm-12 py-5">
                <div class="card text-center" style="border: none;">
                  
                  <div class="card-img-top rounded-circle align-self-center d-flex justify-content-center align-items-center" 
                    style="height: 170px; width:170px; background-color: #0a52dd;">
                    <h1>
                      <img src="https://img.icons8.com/material/70/ffffff/here.png"/>
                    </h1>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title font-weight-bold">UNLIMITED RESOURCES</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-4 col-sm-12 py-5">
                <div class="card text-center" style="border: none;">
                  <!-- <img src="./assets/home.png" class="card-img-top rounded-circle" alt="..."> -->
                  <div class="card-img-top rounded-circle align-self-center d-flex justify-content-center align-items-center" 
                    style="height: 170px; width:170px; background-color: #0a52dd;">
                    <h1>
                      <img src="https://img.icons8.com/material/70/ffffff/infinity--v1.png"/>
                    </h1>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title font-weight-bold">UNLIMITED IDEAS</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-4 col-sm-12 py-5">
                <div class="card text-center" style="border: none;">
                  <!-- <img src="./assets/home.png" class="card-img-top rounded-circle" alt="..."> -->
                  <div class="card-img-top rounded-circle align-self-center d-flex justify-content-center align-items-center" 
                    style="height: 170px; width:170px; background-color: #0a52dd;">
                    <h1>
                      <img src="https://img.icons8.com/material/70/ffffff/personal-growth.png"/>
                    </h1>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title font-weight-bold">UNLIMITED GROWTH</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php include "./footer.php"; ?>
  </body>
</html>
