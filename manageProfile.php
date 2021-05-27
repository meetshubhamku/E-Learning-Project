<?php 
session_start(); 
if(!isset($_SESSION['urole']))
{
  echo "<script>alert('Invalid request. Please Login')</script>";
  echo "<script>window.location.replace('./login.php');</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<?php include "./head.php"; ?>
<body onload="hideLoader();">

<!-- Loader -->
<?php include "./loader.php"; ?>

<!-- navbar -->
<?php include "./navbar.php"; ?>

<div class="container my-3 py-3">
  <h2 class="text-center mt-3 mb-5"><?php echo $_SESSION['uname']; ?>'s Profile</h2>
  <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12 text-center">
      <img src="https://ui-avatars.com/api/?background=0D8ABC&size=170&color=fff&name=<?php echo $_SESSION['uname']; ?>" class="img-fluid" alt="Profile Image" style="border-radius: 30px;">
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 text-left">
      <div class="form-group">
        <small id="emailHelp" class="form-text text-muted">Name</small>
        <label for="exampleInputEmail1"><?php echo $_SESSION['uname']; ?></label>
      </div>
      <div class="form-group">
        <small id="emailHelp" class="form-text text-muted">Email</small>
        <label for="exampleInputEmail1"><?php echo $_SESSION['uemail']; ?></label>
      </div>
      <div class="form-group">
        <small id="emailHelp" class="form-text text-muted">Role</small>
        <label for="exampleInputEmail1"><?php echo $_SESSION['urole']==1?"Admin":"User";  ?></label>
      </div>
    </div>
  </div>
</div>

<?php include "./footer.php"; ?>
</body>
</html>