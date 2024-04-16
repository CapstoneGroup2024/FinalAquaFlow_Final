<?php session_start(); ?> <!----- START SESSION ----->
<!--------------- NAVBAR --------------->
<nav class="navbar fixed-top navbar-expand-lg bg-custom-success navbar-dark py-2 " id="navbg">
  <div class="container-fluid" id="navbar"> 
    <a class="navbar-brand"> <!----- LOGO ----->
    <img src="assets/images/Aquatic.png" alt="Bootstrap" width="40" height="40"class="d-inline-block align-text-center" id="aquaflowtext">AquaFlow</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span> <!----- TOGGLER FOR NAVBAR ----->
    </button>
    <!--------------- OFF CANVAS NAVBAR --------------->
    <div class="offcanvas offcanvas-end bg-custom-success" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">&nbsp;</h5>
        <button type="button-navbar" class="btn-close btn-close-black" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body bg-custom-success">
        <!--------------- LINKS --------------->
        <ul class="navbar-nav ml-auto px-lg-3 justify-content-end align-items-center flex-grow-1 pe-3">
          <li class="nav-item px-lg-4">
            <a class="nav-link px-lg-2" aria-current="page" href="#homepage">Home</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link px-lg-2" href="#">Services</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link px-lg-2" href="#">About Us</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link px-lg-2" id="contact" href="#">Contact</a>
          </li>
        <!--------------- DROP DOWN FOR LOGOUT --------------->
        <?php
          if(isset($_SESSION['auth'])){ // CHECKS IF USER LOGGED IN
            ?>
              <div class="dropdown">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?= $_SESSION['auth_user']['name']?></a> <!----- GET USER AND NAME ----->
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                </ul>
              </div>
            <?php
          } else{ // DISPLAY REG AND LOGIN IF NOT LOGGED IN
              ?>
                <li class="nav-item px-lg-4">
                  <a class="nav-link px-lg-2" href="register.php">Register</a>
                </li>
                <li class="nav-item px-lg-4">
                  <a class="nav-link px-lg-2" id="contact" href="index.php">Login</a>
                </li>
              <?php
          }
        ?>
        </ul>
      </div>
    </div>
  </div>
</nav>