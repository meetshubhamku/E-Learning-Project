<nav class="navbar navbar-expand-lg navbar-light bg-light pl-5 pr-5 font-weight-bold">
      <a class="navbar-brand" href="./index.php" style="font-family: Gabriola; font-size:2.2rem; color:#328f8a;">
        <i class="mr-2"><img src="https://img.icons8.com/material/50/328f8a/machine-learning.png"/></i>
        LearnCog
      </a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
        
          <?php 

            if(isset($_SESSION['uemail']) && $_SESSION['urole']==1)
            {
            ?>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <!-- <?php echo $_SESSION['uname'] ?> -->
                  <i>
                    <img src="https://ui-avatars.com/api/?background=328f8a&size=38&color=fff&name=<?php echo $_SESSION['uname']; ?>" class="img-fluid" alt="Profile Image" style="border-radius: 30px;">
                  </i>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="./adminDashboard.php">Dashboard</a>
                  <a class="dropdown-item" target="_blank" href="./phpPlayground.php">Php Playground</a>
                  <a class="dropdown-item" href="./manageProfile.php">Profile</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item text-danger font-weight-bold"  href="./logout.php">Logout</a>
                </div>
              </li>
            <?php
            }
            else if(isset($_SESSION['uemail']) && $_SESSION['urole']==0)
            {
              ?>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <!-- <?php echo $_SESSION['uname'] ?> -->
                  <i>
                    <img src="https://ui-avatars.com/api/?background=328f8a&size=38&color=fff&name=<?php echo $_SESSION['uname']; ?>" class="img-fluid" alt="Profile Image" style="border-radius: 30px;">
                  </i>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="./userDashboard.php">Dashboard</a>
                  <a class="dropdown-item" target="_blank" href="./phpPlayground.php">Php Playground</a>
                  <a class="dropdown-item" href="./manageProfile.php">Profile</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item text-danger font-weight-bold" href="./logout.php">Logout</a>
                </div>
              </li>
            <?php
            }


            if(isset($_SESSION['uemail']))
            {
            ?>
              <li class="nav-item">
                <a class="nav-link btn font-weight-bold back text-white px-3 mt-1" href="./logout.php">Logout</a>
              </li>
            <?php
            }
            else
            {
              ?>
              <li class="nav-item">
                <a class="nav-link font-weight-bold" href="./login.php">SignIn</a>
              </li>
            <?php
            }

            
          ?>
          
        </ul>
      </div>
    </nav>