<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link
      rel="stylesheet"
      href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="normalize.min.css" />
    <link rel="icon" href="../image/iconchrome.png" />
    <link rel="stylesheet" href="../css/register.css" />
    <title>SignUp</title>
  </head>
<body>
<header class="header">
      <a href="#" class="header__logo">Git<span class="hup">Hub</span></a>
      <div class="header__burger">
        <span></span>
      </div>
      <nav class="header__nav">
        <ul class="header__list">
          <li class="header__list">
            <a class="header__link btn1 bottombtn1" href="../index.html">Home</a>
          </li>
          <li><a class="header__link btn1" href="../feature.html">Feature</a></li>
          <li>
            <a class="header__link btn1" href="./customers.php">Customers</a>
          </li>
          <li>
            <a class="header__link btn2" href="./log.php">Log in</a>
          </li>
        </ul>
      </nav>
    </header>

	 
<?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['fullname'])){
        // removes backslashes
	$fullname = stripslashes($_REQUEST['fullname']);
        //escapes special characters in a string
	$fullname = mysqli_real_escape_string($con,$fullname); 
	$phone = stripslashes($_REQUEST['phone']);
	$phone = mysqli_real_escape_string($con,$phone);
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($con,$email);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `user` (fullname, password, phone, email, trn_date)
VALUES ('$fullname', '".md5($password)."', '$phone', '$email', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "
				<div class='section'>
<div class='container'>
<div class='card-3d-wrap mx-auto'>
				<div class='card-3d-wrapper'>
				<div class='center-wrap'>
<div class='card-back'>

<div class='section text-center'>
<div class='form'>
<h3 class='mb-3 pb-3 h-reg'>You are registered successfully.</h3>
<br/><p class='p-reg'>Click here to </p><a href='log.php'><span class='btn mt-4'>Login</span></a></div>
</div>
</div>
</div>
</div>
</div>
</div>";
        }
    }else{
?>
<div class="section">
<div class="container">
<!-- <div class="row full-height justify-content-center"> 
           <div class="col-12 text-center align-self-center py-5">  -->
 
			 <div class="card-3d-wrap mx-auto">
				<div class="card-3d-wrapper">
			 <!-- <div class="card-front">  -->
			 <div class="center-wrap">
<div class="card-back">

<div class="section text-center">
	<div class="form">
	<h4 class="mb-3 pb-3">Sign Up</h4>
<form name="registration" action="" method="post">
<div class="form-group"> <input type="text" class="form-style" name="fullname" placeholder="Full name" required /><i class="input-icon uil uil-user"></i></div>
<div class="form-group mt-2"><input type="tel" class="form-style" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="Phone Number" required /><i class="input-icon uil uil-phone"></i></div>
<div class="form-group mt-2"><input type="email" class="form-style" name="email" placeholder="Email" required /><i class="input-icon uil uil-at"></i></div>
<div class="form-group mt-2"><input type="password" class="form-style" name="password" pattern=".*[A-Z].*" minlength="4" maxlength="8" size="8" placeholder="Password" required /><i class="input-icon uil uil-lock-alt"></i></div>
<input class="btn mt-4" type="submit" name="submit" value="Register" />
</form>
</div> 
 <!-- </div>  
</div> 
</div>-->
</div>
</div>
</div>
</div>
	 </div>
</div>
<?php } ?>




<footer>
      <div class="waves">
        <div class="wave" id="wave1"></div>
        <div class="wave" id="wave2"></div>
        <div class="wave" id="wave3"></div>
        <div class="wave" id="wave4"></div>
      </div>
      <ul class="social__icon">
        <li>
          <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
        </li>
        <li>
          <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
        </li>
        <li>
          <a href="#"><ion-icon name="logo-linkedin"></ion-icon></a>
        </li>
        <li>
          <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
        </li>
      </ul>
      <ul class="menuu">
        <li><a href="#">Home</a></li>
        <li><a href="#">Topics</a></li>
        <li><a href="#">Customers</a></li>
        <li><a href="#">LogIn</a></li>
      </ul>
      <p>© 2023 GitHub, Inc.</p>
    </footer>

	 <script
      type="module"
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
    ></script>

    <script>
      var coll = document.getElementsByClassName("collapsible");
      var i;

      for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function () {
          this.classList.toggle("go");
          var content = this.nextElementSibling;
          if (content.style.maxHeight) {
            content.style.maxHeight = null;
          } else {
            content.style.maxHeight = content.scrollHeight + "px";
          }
        });
      }
    </script>
    <script>
      $(document).ready(function () {
        $(".header__burger").click(function (event) {
          $(".header__burger, .header__nav").toggleClass("active");
          $(".body").toggleClass("lock");
        });
      });
    </script>
</body>
</html>
