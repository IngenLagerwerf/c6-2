<!DOCTYPE html>
<html lang="en">
<!-- <?php session_start();
      $_SESSION['true'] = false; ?> -->

<head>
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
  <!-- #endregion -->
  <?php
  if (isset(($_POST['id']))) {
  echo '<div class="sowe">';
  $id = $_POST['id'];
  include_once("inc/connectien.inc.php"); 
  include_once("inc/autosowe.inc.php");
  echo '</div>';
  }
else{
  header("Location: showroom.php");
}

?>
  <!-- #region Footer-->
  <div id="footer"></div>
  <script>
    $("#footer").load("common/footer.html");
  </script>
  <!-- #endregion -->
</body>

</html>