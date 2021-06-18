<?php include('reg.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="login.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/styles.css">

  <!-- Font Awesome -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</head>
<body>



    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #C70039;">
      <a class="navbar-brand" href="#" style="color:#FFFFFF;">
        <img src="imagess/logo.jpg" alt="logo"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="home.php" style="color:#FFFFFF;">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about" style="color:#FFFFFF;">About Us</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="collection.php" style="color:#FFFFFF;">Collection</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php" style="color:#FFFFFF;">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php" style="color:#FFFFFF;">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fas fa-cart-arrow-down" style="font-size:33px;color:#FFFFFF;"></i></a>
          </li>
        </ul>
      </div>
    </nav>



  <div class="header">
  	<h2>Admin Login</h2>
  </div>

  <form method="post" action="adminlogin.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
    <div class="input-group">
    <a href="admin.php" style="color:#C70039">Login</a>
    </div>


  </form>



  <!--Footer-->

        <footer class="footer-section" id="footer">
  <div class="container-fluid1">
    <div class="row">
        <div class="col-lg-6 col-md-4 col-12">
  <div class="foot">
    <h3>Info</h3>
    <ul class="fa-ul">
      <li><span class="fa-li"><i class="fas fa-angle-double-right"></i></span><a href="home.php" style="color:#FFFFFF;">Home</a></li>
      <li><span class="fa-li"><i class="fas fa-angle-double-right"></i></span><a href="collection.php" style="color:#FFFFFF;">Collection</a></li>
      <li><span class="fa-li"><i class="fas fa-angle-double-right"></i></span><a href="privacy.php" style="color:#FFFFFF;">Privacy & policy</a></li>
      <li><span class="fa-li"><i class="fas fa-angle-double-right"></i></span><a href="terms.php" style="color:#FFFFFF;">Terms & Condition</a></li>
    </ul>
    </div>
  </div>
  <div class="col-lg-6 col-md-4 col-12 foo3">
    <h6>P.E.S Modern College of Engineering , Shivajinagar , Pune , 411005.</h6>
  <h6>Contact No : +91 *********</h6>
  <h6>
  © 2020 artify.com</h6>
  <i class="social-icon fab fa-facebook-f"></i>
    <i class="social-icon fab fa-twitter"></i>
      <i class="social-icon fab fa-instagram"></i>
  <i class="social-icon fas fa-envelope"></i>
  </div>
  </div>

          <div class="foot1">



      <p >© Copyright 2020 artify.com</p>
      </div>
    </div>

  </footer>
  <!--/Footer-->

</body>
</html>
