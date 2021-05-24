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
<body class="back">

  <!-- Navbar Section -->
  <?php include "./navbar.php"; ?>

  <!-- Dashborad section -->
  <div class="container my-5 ">
    <h1 class="text-center text-light">User dashboard</h1>
  </div>


  <!-- Footer section -->
  <?php include "./footer.php"; ?>
</body>
</html>