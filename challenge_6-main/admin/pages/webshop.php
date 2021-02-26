<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Webshop</title>
  <link rel="stylesheet" href="css/webshop.css" />
</head>

<body>
  <?php
  if (!isset($_SESSION["ID"]) && $_SESSION["STATUS"] != "ACTIEF") {
    echo "<script>
       alert('U heeft geen toegang tot deze pagina.');
       location.href='../index.php';
    </script>";
  }
  ?>
  <!--Dit is het zoekformulier -->
  <script src="js/webshop.js"></script>
  <div class="content">
    <form name="search" id="search" action="" method="POST">
      <div style="background-color:#C2F98E; height:25px; margin-top:5%; padding:0;">
        <input type="text" style="float:left; width:70%;" id="patroon" name="patroon" placeholder="Zoek albums" />
        <input type="submit" style="float:none; width:10%; font-size: 1.2rem;" id="zoeken" name="zoeken" value="&#128270;" /> </br>
      </div>
    </form>
  </div>

  <?php

  ///Hier wordt de sql -opdracht gegenereerd
  if (isset($_POST["zoeken"]) && !empty($_POST["patroon"])) {
    $patroon = htmlspecialchars($_POST["patroon"]);
    $sql = "SELECT * FROM autos_test WHERE naam LIKE '%$patroon' || merken LIKE '%$patroon%' || jaar LIKE '%$patroon%'";
  } else {
    $sql = "SELECT * FROM autos_test";
  }

  ?>

  <div class="content">
    <form name="webshop" id="webshop" action="index.php?page=bestellen" method="POST">

      <?php

      //Dit is het bestelformulier met albums uit de database
      $stmt = $pdo->prepare($sql);
      $stmt->execute();
      $albums = $stmt->fetchAll(PDO::FETCH_ASSOC);
      $lus = 0;
      foreach ($albums as $album) {
        // echo "<img width='100px' src='img/" . $album['images'] . "' />";
        $img =  $album['images'];
        echo '<img class="test" src="data:image/jpg;base64,' . base64_encode($img) . '" />';
        echo "<input type='hidden' name='id[$lus]' value='" . $album['id'] . "' />";
        echo "<input type='hidden' name='naam[$lus]' id='naam[$lus]' value='" . $album['naam'] . "' />";
        echo "<input type='hidden' name='merken[$lus]' id='merken[$lus]'value='" . $album['merken'] . "' />";
        echo "<input type='hidden' name='jaar[$lus]' id='jaar[$lus]' value='" . $album['jaar'] . "' />";
        echo "<input type='hidden' name='prijs'[$lus]' id='prijs[$lus]' value='" . $album['prijs'] . "' />  ";
        echo "<br /> titel:" . $album["naam"];
        echo "<br /> prijs:" . $album["prijs"];
        echo "<br /> Voorraad:" . $album["voorraad"];
        echo "<br />Aantal:";
        echo "<input class='aantal' type='text' style='width:10%;' name='aantal[$lus]' id='aantal[$lus]' value='' />";
        echo "<hr />";
        $lus++;
      }
      echo "<input type='hidden' name='lus' id='lus' value='" . $lus . "' />";
      ?>

      <!--winkelmandje aan en uitzetten --
      <input type="checkbox" name="winkelmanje_knop" id="winkelmandje_knop" onclick="javascript:showWinkelmandje();" class="icon" value="&#128717;" />
      <label for="winkelmandje_knop">&#128717;</label>
      <br />
      <div class="icon_container">
        <input type="submit" class="icon" id="submit" name="submit" value="&rarr;" />
      </div>
      <br />
      <!-winkelmandje--
      <div id="winkelmandje">
        <div id="rijen"></div>
        <input type="checkbox" id="winkelmandje_knop" onclick="javascript:showWinkelmandje();" class="icon" value="x" />
        <label for="winkelmandje_knop" style="color:red;">&#8861;</label>-->
      </div>
</body>

</html>