<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <!-- Icons -->
  <script src="https://kit.fontawesome.com/d16edb7c21.js" crossorigin="anonymous"></script>

  <!-- Stylesheet -->
  <link rel="stylesheet" href="style.css" type="text/css">

</head>

<body>
  <header class="header-area wow fadeInDown" data-wow-delay="500ms">
    <!-- Navbar Area -->
    <div class="ventura-main-menu" id="sticker">
      <div class="classy-nav-container breakpoint-off">
        <div class="container">
          <!-- Menu -->
          <nav class="classy-navbar justify-content-between" id="venturaNav">

            <!-- Navbar Toggler -->
            <div class="classy-navbar-toggler">
              <span class="navbarToggler"><span></span><span></span><span></span></span>
            </div>

            <!-- Menu -->
            <div class="classy-menu">

              <!-- Close Button -->
              <div class="classycloseIcon">
                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
              </div>

              <!-- Nav Start -->
              <div class="classynav">
                <ul>
                  <li><a href="#" data-toggle="tooltip" data-placement="top" title="Home"><i class="fa fa-home fa-lg" aria-hidden="true"></i></a></li>
                  <li><a href="#" data-toggle="tooltip" data-placement="top" title="Notifications"><i class="fa fa-bell" aria-hidden="true"></i></a></li>
                  <?php
                  if(isset($_SESSION['login_user'])){
                    ?>
                    <li><a href="logout.php">Logout</a></li>
                    <li>
                      <?php
                        echo "Welcome ".$_SESSION['login_user'].".";
                      ?>
                    </li>
                    <?php
                  }
                  else{
                    ?>
                      <li><a href="#" data-toggle="modal" data-target="#signupModal">Sign Up</a></li>
                      <li><a href="#" data-toggle="modal" data-target="#loginModal">Login</a></li>
                    <?php
                  }
                  ?>
                </ul>
              </div>
              <!-- Nav End -->
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>
