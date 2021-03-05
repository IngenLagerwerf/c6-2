<!DOCTYPE html>
<html lang="en"> 
  <?php include_once('inc/db_showroom') ?>
 <?php session_start();
      $_SESSION['true'] = false; ?>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/6488e6347e.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/navbar.css" />
  <link rel="shortcut icon" href="images/cars.ico" type="image/x-icon">
  <link 
  <title> v!st@CARS</title>
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


  <img src="images/achtergrond.png" alt="Car" style="width:100%">




  <!-- #region Footer-->
  <div id="footer"></div>
  <script>
    $("#footer").load("common/footer.html");
  </script>
  <!-- #endregion -->
</body>

</html>