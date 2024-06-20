<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/normalize.min.css" />
    <link rel="icon" href="iconchrome.png" />
    <link rel="stylesheet" href="../css/editt.css" />   
    <title>Add</title>
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
            <a class="header__link btn1" href="dashboard.php">Home</a>
          </li>
          <li><a class="header__link btn1" href="#">Feature</a></li>
          <li><a class="header__link btn1" href="customers2.php">Customers</a></li>
          <li>
            <a class="header__link" href="indexx.php"><img src="../image/user.png" alt=""></a>
            </li>
        </ul>
      </nav>
    </header>
    
 <div class="form__body">
 <main class="table">
 <section class="table__header">
		<h1>Add customers</h1>
	</section>
		<form method="POST" action="add.php">
			<label>Name:</label><input type="text" name="name">
			<label>Lastname:</label><input type="text" name="lastname">
            <label>Email:</label><input type="text" name="email">
			<label>Phone:</label><input type="text" name="phone">
            <label>Address:</label><input type="text" name="address">
		    <input class="btn__a" type="submit" name="add">
            <button class="card__btn"> <a class="btn__a" href="customers2.php">Back</a></button>
		</form>
</main>
	</div>
     

     <footer>
      <div class="waves">
        <div class="wave" id="wave1"></div>
        <div class="wave" id="wave2"> </div>
        <div class="wave" id="wave3"></div>
        <div class="wave" id="wave4"></div>
      </div>
      <ul class="social__icon">
        <li><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
        <li><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
        <li><a href="#"><ion-icon name="logo-linkedin"></ion-icon></a></li>
        <li><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
      </ul>
      <ul class="menuu">
        <li><a href="#">Home</a></li>
        <li><a href="#">Topics</a></li>
        <li><a href="#">Customers</a></li>
        <li><a href="#">LogIn</a></li>
      </ul>
      <p>© 2023 GitHub, Inc.</p>
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    
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