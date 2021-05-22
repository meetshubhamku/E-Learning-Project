<nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="./index.php">E-Learning</a>
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
            if(isset($_SESSION['uemail']))
            {
            ?>
              <li class="nav-item">
                <a class="nav-link btn font-weight-bold back text-white px-3" href="./logout.php">Logout</a>
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