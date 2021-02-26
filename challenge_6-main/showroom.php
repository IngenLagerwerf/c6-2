<!DOCTYPE html>
<html lang="en">
<!-- <?php session_start();
      $_SESSION['true'] = false; ?> -->

<head>
  <link rel="stylesheet" href="css/aanbod.css" />
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/6488e6347e.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="css/navbar.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="shortcut icon" href="images/cars.ico" type="image/x-icon">
  <title>v!st@CARS</title>
</head>

<body>
<img class="logovista" src="images/logovista.webp" alt="">
  <!-- #region Navbar-->
  <div id="navbar">
    <script>
      $("#navbar").load("common/navbar.html");
    </script>
  </div>
  <!-- #endregion -->

  <!-- #region Filter-->
  <div id="filter">
    <?php include_once("inc/filter.inc.php") ?>
  </div>
  <!-- #endregion -->
  
  <!-- #region Autos-->
  <?php include_once("inc/connectien.inc.php") ?>
  <?php
  if (isset(($_POST['merken']))) {
    $merk = $_POST['merk'];
    echo  "<div id=\"auto\">";
    include("inc/autos.inc_merken.php");
    echo "</div>";  
  }
  elseif (isset(($_POST['branden']))) {
    $brand = $_POST['brand'];
    echo  "<div id=\"auto\">";
    include("inc/autos.inc_brand.php");
    echo "</div>";  
  }
  elseif (isset(($_POST['newtwees']))) {
    $newtwee = $_POST['newtwee'];
    echo  "<div id=\"auto\">";
    include("inc/autos.inc_newtwee.php");
    echo "</div>";  
  }
  elseif (isset(($_POST['prijssen']))) {
    $prijs = $_POST['prijs'];
    echo  "<div id=\"auto\">";
    include("inc/autos.inc_prijs.php");
    echo "</div>";  
  }
  else {
    echo  "<div id=\"auto\">";
    include("inc/autos.inc.php");
    echo "</div>";
  }
  ?>
  <!-- #endregion -->













  <!-- #region Footer-->
  <div id="footer">
    <script>
      $("#footer").load("common/footer.html");
    </script>
  </div>
  <!-- #endregion -->
</body>

</html>