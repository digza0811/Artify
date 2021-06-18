<!--Contact Us-->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">

  <!-- Bootstrap Scripts -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/styles.css">
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



    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<div class="contact">

<div class="container contact">
<div class="row">
<div class="col-md-3">
  <div class="contact-info">
    <img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image"/>
    <h2>Contact Us</h2>
    <h4>We would love to hear from you !</h4>
  </div>
</div>
<div class="col-md-9">
  <div class="contact-form">
    <form class="" action="data.php" method="post">
      <div class="form-group">
      <label class="control-label col-sm-2" for="fname">First Name:</label>
      <div class="col-sm-10">
      <input type="text" class="form-control" name="fname" id="fname" placeholder="Enter First Name" name="fname">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="lname">Last Name:</label>
      <div class="col-sm-10">
      <input type="text" class="form-control" name="lname" id="lname" placeholder="Enter Last Name" name="lname">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
      <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" name="email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="comment">Comment:</label>
      <div class="col-sm-10">
      <textarea class="form-control" rows="5" name="comment" id="comment"></textarea>
      </div>
    </div>
    <div class="form-group">

        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-danger">Submit</button>
      </div>
    </div>
  </form>
    </div>
  </div>
</div>
</div>
</div>

</body>
</html>
