<?php
//include auth.php file on all secure pages
include("auth.php");
?>
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


	 <div class='section'>
<div class='container'>
<div class='card-3d-wrap mx-auto'>
				<div class='card-3d-wrapper'>
				<div class='center-wrap'>
<div class='card-back'>

<div class='section text-center'>	 
<div class="form">
<p >Welcome <?php echo $_SESSION['fullname']; ?>!</p>
<p>This is secure area.</p>
<p ><a href="dashboard.php">GitHub</a></p>
<a class="btn mt-4" href="logout.php">Logout</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<!-- <footer> 
      <div class="waves">
        <div class="wave" id="wave1"></div>
        <div class="wave" id="wave2"></div>
        <div class="wave" id="wave3"></div>
        <div class="wave" id="wave4"></div>
      </div>
      <ul class="social__icon">
        <li><a href="https://www.facebook.com/GitHub"><ion-icon name="logo-facebook"></ion-icon></a></li>
        <li><a href="https://twitter.com/github"><ion-icon name="logo-twitter"></ion-icon></a></li>
        <li><a href="https://www.linkedin.com/company/github"><ion-icon name="logo-linkedin"></ion-icon></a></li>
        <li><a href="https://www.youtube.com/github"><ion-icon name="logo-instagram"></ion-icon></a></li>
      </ul>
   
      <p>© 2023 GitHub, Inc.</p>
    </footer>-->

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