<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Vollkorn:ital,wght@0,400;0,500;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet"> 
</head>
<body>
    <nav style="position:fixed ; " class="navbar navbar-dark bg-dark ">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">portofilio</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Dark offcanvas</h5>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="?pages=service">service</a>
                </li>
                
                  <li class="nav-item">
                    <a class="nav-link" href="?pages=port">portofilio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="?pages=contact">contact</a>
                  </li>
            
             
            </div>
          </div>
        </div>
      </nav>


      <section>

    <?php
if(!isset($_GET["pages"])){
  include "include/home.php";

}elseif($_GET["pages"] == "service"){
  include "include/about.php";

}elseif($_GET["pages"] == "port"){
  include "include/port.php";
}elseif($_GET["pages"] == "contact"){

  include "include/contact.php";

}

?>
      </section>





    <script src="js/all.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.6.1.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/main.js"></script>


        <script src="js/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>


<script>
 $(function(){

  $(".show").click(function(){

    $(".port1").removeClass("port1").addClass("port");

  })
 })
</script>
</body>
</html>