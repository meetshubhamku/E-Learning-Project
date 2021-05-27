<?php 
session_start(); 
if(!isset($_SESSION['urole']) || $_SESSION['urole']!=0)
{
  echo "<script>alert('Invalid request. Please Login')</script>";
  echo "<script>window.location.replace('./login.php');</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<?php include "./head.php"; ?>
<body class="back" onload="hideLoader();">

   <!-- Loader -->
   <?php include "./loader.php"; ?>
   
  <!-- Navbar Section -->
  <?php include "./navbar.php"; ?>

  <!-- Dashborad section -->
  <div class="container my-5 ">
    <h1 class="text-center text-light">Dashboard</h1>

    <!-- Card Section 1 -->
    <div class="row">
      <!--Course Category -->
      <div class="col-sm-4 my-2">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">
            <i class="pr-2"><img src="https://img.icons8.com/material/24/000000/video.png"/></i>
            Video Courses</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, vero.</p>
            <a href="./viewVideoCourses.php" class="btn btn-primary back">Learn</a>
          </div>
        </div>
      </div>
      <!-- E Books -->
      <div class="col-sm-4 my-2">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">
            <i class="pr-2"><img src="https://img.icons8.com/material/24/000000/book-stack--v1.png"/></i>
            E-Books</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, vero.</p>
            <a href="./manageEbooks.php" class="btn btn-primary back">Learn</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  


  <!-- Footer section -->
  <?php include "./footer.php"; ?>
</body>
</html>