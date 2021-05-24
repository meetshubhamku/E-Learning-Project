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
  <?php include "./head.php" ?>
<body>
  <?php include "./navbar.php" ?>

  <div class="container py-5 ">
    <h2 class="text-center">Course Categories</h2>
    <div class="row">
      <div class="col-4">
        <div class="list-group" id="list-tab" role="tablist">
          <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Add</a>
          <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Delete</a>
        </div>
      </div>
      <div class="col-8">
        <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
            <form class="px-3" method="POST" action="./addCourseCategory.php">
              <div class="form-group">
                <label for="exampleInputName1">Name</label>
                <input type="text" name="categoryName" class="form-control" id="exampleInputName1" aria-describedby="emailHelp" required>
                <small id="emailHelp" class="form-text text-muted">Provide a name for category.</small>
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Description (optional)</label>
                <textarea class="form-control" name="categoryDescription" id="exampleFormControlTextarea1" rows="3"></textarea>
                <small id="descHelp" class="form-text text-muted">Provide a small description.</small>
              </div>
              <button type="submit" name="addvideocategory" class="btn btn-primary">Submit</button>
            </form>
          </div>
          <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">...</div>
        </div>
      </div>
    </div>
  
  </div>

  <?php include "./footer.php" ?>
</body>
</html>