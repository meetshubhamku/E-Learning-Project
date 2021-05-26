<?php 
session_start(); 
if(!isset($_SESSION['urole']) || $_SESSION['urole']!=1)
{
  echo "<script>alert('Invalid request. Please Login')</script>";
  echo "<script>window.location.replace('./login.php');</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<?php include "./head.php"; ?>
<body class="back">
  <?php include "./navbar.php"; ?>
  <div class="container my-5 ">
    <h1 class="text-center text-light">Dashboard</h1>

    <!-- Card Section 1 -->
    <div class="row">
      <!--Course Category -->
      <div class="col-sm-4 my-2">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">
            <i class="pr-2"><img src="https://img.icons8.com/material/24/000000/sorting-answers.png"/></i>
            Course Categories</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, vero.</p>
            <a href="./manageCourseCategory.php" class="btn btn-primary back">Manage</a>
          </div>
        </div>
      </div>
      <!-- Video Course -->
      <div class="col-sm-4 my-2">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">
            <i class="pr-2"><img src="https://img.icons8.com/material/24/000000/video.png"/></i>
            Video Courses</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, vero.</p>
            <a href="./manageVideoCourses.php" class="btn btn-primary back">Manage</a>
          </div>
        </div>
      </div>
      <!-- Private Course -->
      <div class="col-sm-4 my-2">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">
            <i class="pr-2"><img src="https://img.icons8.com/material/24/000000/book-stack--v1.png"/></i>
            Online E-books</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, vero.</p>
            <a href="./manageEbooks.php" class="btn btn-primary back">Manage</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Card Section 2 -->
    <div class="row">
      <!-- Audio Course -->
      <div class="col-sm-4 my-2">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">
            <i class="pr-2"><img src="https://img.icons8.com/fluent-systems-filled/24/000000/high-volume.png"/></i>
            Audio Courses</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, vero.</p>
            <a href="#" class="btn btn-primary back">Manage</a>
          </div>
        </div>
      </div>
      <!-- Online Tutorials -->
      <div class="col-sm-4 my-2">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">
            <i class="pr-2"><img src="https://img.icons8.com/material/24/000000/online-shop-2.png"/></i>
            Online Courses</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, vero.</p>
            <a href="#" class="btn btn-primary back">Manage</a>
          </div>
        </div>
      </div>
      <!-- Video Course -->
      <div class="col-sm-4 my-2">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">
            <i class="pr-2"><img src="https://img.icons8.com/material-sharp/24/000000/video.png"/></i>
            Video Courses</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, vero.</p>
            <a href="#" class="btn btn-primary back">Manage</a>
          </div>
        </div>
      </div>
    </div>

  </div>

  <?php include "./footer.php"; ?>
</body>
</html>